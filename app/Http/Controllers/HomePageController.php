<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function home_page()
    {
        $products = Product::all();
        $data['products'] = $products;
        $data['popular_products'] = $products->whereIn('id',[1,4,5,6,7,13,16,17,18]);
        return view('home-page',$data);
    }
}
