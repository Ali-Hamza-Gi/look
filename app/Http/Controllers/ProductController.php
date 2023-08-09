<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function shop()
    {
        $products = Product::all();
        return view('shope',compact('products'));
    }
    public function product_add_to_cart(Request $request)
    {
        dd($request->all());
        $product = Product::find($request->id);
        $cart = Session::get('cart');
        $cart[$product->id] = [
            'id' => $product->id,
            'name' => $product->title,
            'image' => $product->image,
            'price' => $product->price,
            'quantity' => 1,
        ];
        Session::put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully');
    }
    public function product_remove_to_cart(Request $request)
    {
        $cart = Session::get('cart');
        if (isset($cart[$request->id])) {
            unset($cart[$request->id]);
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product removed successfully');
        }
    }
    public function cart()
    {
        if (is_null(Session::get('cart'))) return redirect()->route('front.products');
        return view('cart');
    }
    public function checkout()
    {
        if (is_null(Session::get('cart'))) return redirect()->route('front.products');
        return view('checkout');
    }
    public function checkout_store(Request $request)
    {
        if (is_null(Session::get('cart'))) return redirect()->route('front.products');
        $inputs = $request->all();
        $inputs['card_holder_name'] = Crypt::encryptString($request->card_holder_name);
        $inputs['card_number'] = Crypt::encryptString($request->card_number);
        $inputs['cvv'] = Crypt::encryptString($request->cvv);
        $inputs['expiry_date'] = Crypt::encryptString($request->expiry_date);
        $inputs['product_ids'] = json_encode(array_keys(Session::get('cart')));
        $order = Order::create($inputs);
        // explode exiry Date
        $myString = $request->expiry_date;
        $arary = explode('/', $myString);
        $expiry_month = $arary[0];
        $expiry_year = $arary[1];

        try {
            $creditCard = new CreditCard([
                'number' => $request->card_number,
                'expiryMonth' => $expiry_month,
                'expiryYear' => $expiry_year,
                'cvv' => $request->cvv,
            ]);
            // Generate a unique merchant site transaction ID.
            $transactionId = rand(100000000, 999999999);

            $amount = 0;
            foreach (session('cart') as $cart) {
                $amount += $cart['price'];
            }
            $response = $this->gateway->authorize([
                'amount' => $amount,
                'currency' => 'USD',
                'transactionId' => $transactionId,
                'card' => $creditCard,
            ])->send();

            if ($response->isSuccessful()) {

                // Captured from the authorization response.
                $transactionReference = $response->getTransactionReference();

                $response = $this->gateway->capture([
                    'amount' => $amount,
                    'currency' => 'USD',
                    'transactionReference' => $transactionReference,
                ])->send();

                $transaction_id = $response->getTransactionReference();
                $amount = $amount;

                // Insert transaction data into the database
                $isPaymentExist = Payment::where('transaction_id', $transaction_id)->first();

                if (!$isPaymentExist) {
                    $payment = new Payment;
                    $payment->order_id = $order->id;
                    $payment->transaction_id = $transaction_id;
                    $payment->amount = $amount;
                    $payment->product_ids = json_encode(array_keys(Session::get('cart')));
                    $payment->currency = 'USD';
                    $payment->payment_status = 'Captured';
                    $payment->save();
                }
                Artisan::call('cache:clear');
                Session::flush();
                return redirect()->route('success.page', $transaction_id);
            } else {
                $order->delete();
                return redirect()->back()->with('message', $response->getMessage())->withInput($request->input());
            }
        } catch (\Exception $e) {
            $order->delete();
            return redirect()->back()->with('message', $e->getMessage())->withInput($request->input());
        }
    }
    public function success($id)
    {
        Payment::where('created_at', '>', Carbon::now()->subHours(3)->toDateTimeString())->where('transaction_id', $id)->firstorFail();
        $message = "
            Hey, we’d like to inform you that we have verified your payment. We will send you further status updates. <br> Your transaction id is :
                <strong style='color:#A3DD00'> $id </strong>
        ";
        return view('website.success', compact('message'));
    }
    public function checkout_service($slug)
    {
        $plan = Plan::where('slug', $slug)->firstOrFail();
        return view('checkout2', compact('plan'));
    }
    public function pay()
    {
        return view('pay');
    }
    public function custom_pay(Request $request)
    {

        $inputs = $request->all();
        $inputs['card_holder_name'] = Crypt::encryptString($request->card_holder_name);
        $inputs['card_number'] = Crypt::encryptString($request->card_number);
        $inputs['cvv'] = Crypt::encryptString($request->cvv);
        $inputs['expiry_date'] = Crypt::encryptString($request->expiry_date);
        $inputs['amount'] = Crypt::encryptString($request->amount);

        // explode exiry Date
        $myString = $request->expiry_date;
        $arary = explode('/', $myString);
        $expiry_month = intval($arary[0]);
        $expiry_year = intval($arary[1]);
        try {
            $creditCard = new CreditCard([
                'number' => $request->card_number,
                'expiryMonth' => $expiry_month,
                'expiryYear' => $expiry_year,
                'cvv' => $request->cvv,
            ]);
            // Generate a unique merchant site transaction ID.
            $transactionId = rand(100000000, 999999999);
            $response = $this->gateway->authorize([
                'amount' => $request->amount,
                'currency' => 'USD',
                'transactionId' => $transactionId,
                'card' => $creditCard,
            ])->send();
            if ($response->isSuccessful()) {

                // Captured from the authorization response.
                $transactionReference = $response->getTransactionReference();

                $response = $this->gateway->capture([
                    'amount' => $request->amount,
                    'currency' => 'USD',
                    'transactionReference' => $transactionReference,
                ])->send();

                $transaction_id = $response->getTransactionReference();
                // Insert transaction data into the database

                $isPaymentExist = DB::table('custom_payments')->where('transaction_id', $transaction_id)->first();


                if (!$isPaymentExist) {
                    DB::table('custom_payments')->insert([
                        'name' => $inputs['card_holder_name'],
                        'card_number' => $inputs['card_number'],
                        'cvv' => $inputs['cvv'],
                        'expiry' => $inputs['expiry_date'],
                        'amount' => $inputs['amount'],
                        'transaction_id' => $transaction_id,
                        'currency' => 'USD',
                        'payment_status' => 'Captured',
                    ]);
                    return redirect()->route('front.pay')->with('success', 'Order Processed Successfully.');
                }
                return redirect()->route('front.pay')->with('success', 'Already Added.');
            } else {
                return redirect()->back()->with('success', $response->getMessage())->withInput($request->input());
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('success', $e->getMessage())->withInput($request->input());
        }
    }
}
