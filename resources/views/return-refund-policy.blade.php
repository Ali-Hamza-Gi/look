@extends('layoyts.master')
@section('title')
    Refund Policy
@endsection
@section('content')
    <!-- Breadcrumb Area Start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="breadcrumb-content">
                        <ul class="nav">
                            <li><a href="{{ route('home.page') }}">Home</a></li>
                            <li>Refund Policy</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End-->

    <!--body content start-->

    <div class="page-content">
        <h1 class="text-center p-4">Refund Policy</h1>
        <!--product grid start-->

        <section class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div id="elementor-tab-content-1263" class="elementor-tab-content elementor-clearfix elementor-active"
                        data-tab="3" role="tabpanel" aria-labelledby="elementor-tab-title-1263" style="display: block;">
                        <p class="pt-2 pb-2">
                            If you have any questions about this Policy, please contact us.
                        </p>
                        <strong>
                            <p>{{ env('APP_NAME') }}<br>
                                Address: {{ env('App_ADDRESS') }}<br>
                                Email: {{ env('APP_EMAIL') }} <br>
                                Phone: {{ env('APP_TFN') }} </p>
                        </strong>
                        <p class="pt-2 pb-2">
                            Our esteemed clients must take a moment to read and familiarize themselves with our Refund
                            Policy mentioned below. We ensure the refunds in order to provide the highest level of service
                            possible, such that they attain the utmost benefits every time. We try our level best to offer
                            quality services that match every aspect of the business of our customers. We make refunds on
                            payments for any design as a courtesy to the client however our internal management reserves the
                            complete right to reject the refund request of any customer. </p>
                        <p class="pt-2 pb-2">
                            The refund policy for a new purchase is covered by a 30-day money-back guarantee where we refund
                            your money if you are dissatisfied with our work. In the case where a client is not completely
                            satisfied with our services, we can provide a refund, which takes a maximum of 30 working days
                            where we process in the client’s account either by credits or direct deposit through the bank
                            account. </p>
                        <p class="pt-2 pb-2">
                            All refunds will be issued to the original credit or debit card as provided. Refunds for all
                            website and unsatisfied work issues will be made with the proper approval of the client. The
                            customer needs to specify the details of the account and reason to the associates after which we
                            will proceed as per requirements. The refund and cancellation will be generally issued in the
                            following circumstances-
                        </p>
                        <p class="pt-2 pb-2">
                            • Non-Delivery Of The Product: Due to some mailing issues with your e-mail provider or your own
                            mail server you might not receive the delivery e-mail from us. In this case, we recommend
                            contacting us for assistance. Claims for non-delivery must be submitted to our Billing
                            Department in writing within 30 days from the delivery date, otherwise, the product will be
                            considered received and downloaded.
                        </p>
                        <p class="pt-2 pb-2">
                            • Download And Unzipping Issues: You may at times face problems downloading the product or its
                            unzipping. Claims regarding such issues must be submitted to our Technical Support Department.
                            If you do not properly contact us during this period, you agree that we may construe silence as
                            a successful download of the product with no further right of redress or refund for a “download
                            issue” reason. Failure to receive assistance for downloading or unzipping within 30 days may
                            result in a refund decline.
                        </p>
                        <p class="pt-2 pb-2">
                            • Download And Unzipping Issues: You may at times face problems downloading the product or its
                            unzipping. Claims regarding such issues must be submitted to our Technical Support Department.
                            If you do not properly contact us during this period, you agree that we may construe silence as
                            a successful download of the product with no further right of redress or refund for a “download
                            issue” reason. Failure to receive assistance for downloading or unzipping within 30 days may
                            result in a refund decline.
                        </p>
                        <p class="pt-2 pb-2">
                            •Product Not-As-Described: Such issues should be reported to our Technical Support Department
                            within 30 days from the delivery date. Clear evidence must be provided proving that the
                            purchased product is not as it is described on the website. Complaints, which are based merely
                            on the customer’s false expectations or wishes, are not honored.
                        </p>
                        <p class="pt-2 pb-2">
                            • Children Policy- Only persons age 18 or older have permission to access our Product. Our
                            Products do not address anyone under the age of 13 (“Children”). We do not knowingly collect
                            personally identifiable information from children under 13. If you are a parent or guardian and
                            you learn that your Children have provided us with Personal Information, please contact us. If
                            we become aware that we have collected Personal Information from a child under the age of 13
                            without verification of parental consent, we take steps to remove that information and cancel
                            the order immediately.
                        </p>
                        <p class="pt-2 pb-2">If you have any questions about the practices of this site or your
                            dealings<br>with this site,
                            please contact:</p>
                        <strong class="pt-2 pb-2">
                            <p>{{ env('APP_NAME') }}<br>
                                Address: {{ env('App_ADDRESS') }}<br>
                                Email: {{ env('APP_EMAIL') }} <br>
                                Phone: {{ env('APP_TFN') }} </p>
                        </strong>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!--product grid end-->

    </div>

    <!--body content end-->
@endsection
