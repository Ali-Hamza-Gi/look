@extends('layoyts.master')
@section('title')
    Terms & Conditions
@endsection
@section('content')
    <!--page title start-->

    <section class="page-title parallaxie" data-bg-img="images/bg/04.jpg" data-overlay="6">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col">
                    <h1>Terms & Conditions</h1>
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home.page') }}"><i
                                        class="las la-home me-1"></i>Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Terms & Conditions</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="lines">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </section>

    <!--page title end-->


    <!--body content start-->

    <div class="page-content">

        <!--product grid start-->

        <section class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div id="elementor-tab-content-1263" class="elementor-tab-content elementor-clearfix elementor-active"
                        data-tab="3" role="tabpanel" aria-labelledby="elementor-tab-title-1263" style="display: block;">
                        <p><b>Welcome to {{ env('APP_NAME') }}</b></p>
                        <p>
                            We are truly excited to have you aboard. Thank you for choosing to use our services. Below we have listed important legal terms that apply to anyone who visits our website or uses our services. These terms are necessary in order to protect both you and us and to make our services possible and more enjoyable for everyone.
                        <p>
                            We understand that legal terms can be exhausting to read, and we’ve tried to make the experience more pleasant. If you have any suggestions on how we can improve them, you are more than welcome to contact our legal team at {{ env('APP_EMAIL') }}
                        <p><b>Introduction</b></p>
                        <p class="pl-2"><b>Introduction</b></p>
                        <p class="pl-2"><b>1.1 Introduction</b></p>
                        <p>
                            Our services are designed to allow people from all over the world to easily create a beautiful and engaging online presence for themselves, manage and promote their businesses, content creation, and ideas, and overall have a great experience doing so – even without being tech-savvy or a design guru. We provide our users with numerous templates offered by {{ env('APP_NAME') }}.
                        </p>
                        <p class="pl-2"><b>1.2 Legal Agreement</b></p>
                        <p>
                            These {{ env('APP_NAME') }} Terms of Use (“Terms of Use”), together with our Privacy Policy available at {{ env('WEBSITE_URL') }} (“Privacy Policy”), and such additional terms, which specifically apply to some of our services and features as presented on the {{ env('APP_NAME') }} website(s) (“{{ env('WEBSITE_URL') }} ”, and collectively – the “{{ env('APP_NAME') }} Terms”), all set forth the entire terms and conditions applicable to each visitor or user (“User” or “you”) of the {{ env('APP_NAME') }} Website and/or any other services, applications and features offered by us with respect thereto, except where we explicitly state otherwise (collectively – the “{{ env('APP_NAME') }} Services” or “Services”).
                        </p>
                        <p>
                            The {{ env('APP_NAME') }} Terms constitute a binding and enforceable legal contract between {{ env('APP_NAME') }} and its affiliated companies, subsidiaries worldwide (“{{ env('APP_NAME') }}”, “us” or “we”) and you – so please read them carefully.
                        </p>
                        <p>
                            You may visit and/or use the {{ env('APP_NAME') }} service only if you fully agree to the {{ env('APP_NAME') }} Terms – and by using and/or registering to any of the {{ env('APP_NAME') }}, you signify and affirm your informed consent to these Terms of Use and any other {{ env('APP_NAME') }} Terms applicable to your use of any {{ env('APP_NAME') }} Services. If you do not read, fully understand, and agree to the {{ env('APP_NAME') }} Terms, you must immediately leave the {{ env('APP_NAME') }} Website and avoid or discontinue all use of the {{ env('APP_NAME') }} Services.
                        </p>
                        <p class="pl-2"><b>2. Purchases </b></p>
                        <p>
                            If you wish to purchase any template made available through the Service (“Purchase”), you may be asked to supply certain information relevant to your Purchase including, without limitation, your credit card number, the expiration date of your credit card, your billing address, and your shipping information.
                        </p>
                        <p>
                            You represent and warrant that: (i) you have the legal right to use any credit card(s) or other payment method(s) in connection with any Purchase; and that (ii) the information you supply to us is true, correct and complete. The service may employ the use of third-party services for the purpose of facilitating payment and the completion of purchases. By submitting your information, you grant us the right to provide the information to these third parties subject to our Privacy Policy. We reserve the right to refuse or cancel your order at any time for reasons including but not limited to product or service availability, errors in the description or price of the product or service, error in your order, or other reasons. We reserve the right to refuse or cancel your order if fraud or an unauthorized or illegal transaction is suspected.
                        </p>
                        <p class="pl-2"><b>3. Shipments and Billing </b></p>
                        <p class="pl-2"><b>3.1 All template purchases made from this website are required to be paid in full. For more information about our products, please visit {{ env('WEBSITE_URL') }} </b></p>
                        <p class="pl-2"><b>3.2 After the payment has been successfully made, a downloadable link of your template will be sent to the same email address provided by you within 24 hours. If your template does not arrive within 24 hours please call customer service to address the delay. Although we always strive to make our deliveries as timely as possible circumstances may arise outside of our control, which may impede a timely arrival of your template, You agree we are not liable for such delays. </b></p>
                        <p class="pl-2"><b>3.3 Please note the pricing on the website only includes the pricing of the template. Web Designing does not promote any other web designing, development, domain, or hosting services. </b></p>
                        <p class="pl-2"><b>3.4 Please contact Customer service {{ env('APP_TFN') }} (8 AM- 5 PM MST) with any questions regarding your product, payment, or return. </b></p>
                        <p class="pl-2"><b>3.5 All communication for the plan services will be provided to the customer within the next 24-48 after purchase. </b></p>
                        <p class="pl-2"><b>4. Delivery of the Template </b></p>
                        <p>
                            Your rights to access, download, and use any template will be available once the payment made made and are subject to the terms and conditions.
                        </p>
                        <p>
                            Please make sure to enter the correct email address while making the payment because the template will be sent on the same email provided to us. After the payment has been made, the downloadable link will be sent within 24 hours to the email address entered during the checkout.
                        </p>
                        <p>
                            The theme and the content of the product received by you can be customized and used as per your requirement. For better understanding, the product description is written for every theme.
                        </p>
                        <p>
                            Please note that we do not guarantee continuous, uninterrupted, or secure access to these or any services. Operation of them may be subject to interference from numerous factors outside our control. Further, scheduled and preventive maintenance as well as required and emergency maintenance work may temporarily interrupt services or access to the websites. The disclaimers of warranty and limitations of liability apply, without limitation, to any damages or injury caused by the failure of performance, error, omission, interruption, deletion, defect, delay in operation or transmission, computer virus, communication line failure, theft, or destruction or unauthorized access to, alteration of or use of any asset, whether arising out of breach of contract, tortious behavior, negligence, or any other course of action by us or our affiliates. Certain jurisdictions do not allow the limitation or exclusion of certain warranties, so some or all of these limitations and exclusions of warranty may not apply to you. In no event shall we or its affiliates be liable for any indirect, incidental, exemplary, punitive, special, or consequential damages (including damages for any lost profits, business interruption, costs of delay, any failure of delivery, loss of data, revenue, profits or goodwill, costs of lost or damaged data, documentation or equipment, or liabilities to third parties) arising out of or relating to the {{ env('APP_NAME') }}, our services, any product, or this agreement, even if it has been advised of the possibility of such damages and regardless of the theory of liability (including contract, negligence, tort or warranty). Without limiting the foregoing, in no event shall our aggregate liability to you (for all causes of action), exceed $1000. Certain jurisdictions do not allow the limitation of certain damages, so some or all of these limitations of liability may not apply to you.
                        </p>
                        <p class="pl-2"><b>5. Refund Policy and Cancellation Policy </b></p>
                        <p>
                            Our esteemed clients must take a moment to read and familiarize themselves with our Refund Policy mentioned below. We ensure the refunds in order to provide the highest level of service possible, such that they attain the utmost benefits every time. We try our level best to offer quality services that match every aspect of the business of our customers. We make refunds on payments for any design as a courtesy to the client however our internal management reserves the complete right to reject the refund request of any customer.
                        </p>
                        <p>
                            The refund policy for a new purchase is covered by a 30-day money-back guarantee where we refund your money if you are dissatisfied with our work. In the case where a client is not completely satisfied with our services, we can provide a refund, which takes a maximum of 30 working days where we process in the client’s account either by credits or direct deposit through the bank account.
                        </p>
                        <p>
                            All refunds will be issued to the original credit or debit card as provided. Refunds for all website and unsatisfied work issues will be made with the proper approval of the client. The customer needs to specify the details of the account and reason to the associates after which we will proceed as per requirements. The refund and cancellation will be generally issued in the following circumstances-
                        </p>
                        <p>
                            <ul>
                                <li>
                                    Non-Delivery Of The Product: Due to some mailing issues with your e-mail provider or your own mail server you might not receive the delivery e-mail from us. In this case, we recommend contacting us for assistance. Claims for non-delivery must be submitted to our Billing Department in writing within 30 days from the order placing date, otherwise, the product will be considered received and downloaded.
                                </li>
                                <li>
                                    Download And Unzipping Issues: You may at times face problems downloading the product or its unzipping. Claims regarding such issues must be submitted to our Technical Support Department. If you do not properly contact us during this period, you agree that we may construe silence as a successful download of the product with no further right of redress or refund for a “download issue” reason. Failure to receive assistance for downloading or unzipping within 30 days may result in a refund decline.
                                </li>
                                <li>
                                    Major Defects: Although all the products are thoroughly tested before release, unexpected errors may occur. Such issues must be submitted for our Technical Support Team’s approval. We keep the right to rectify the error or defect within 72 hours. If any deficiency is approved and we fail to correct it within 72 hours from the date of the initial complaint letter or any other notification provided by a Customer, the refund will be issued to the customer in full without any compensations or reimbursements. OR, at the customer’s choice, replacement of the product of the same or around the same value can be offered. Please be advised that temporary access to your server can be requested by our technicians in order to identify and fix the possible issues with our Products. Failure to provide such access in a timely manner may result in a delayed resolution of the issue. Refusal to provide access to your sever will result in your inability to qualify for a refund.
                                </li>
                                <li>
                                    Product Not-As-Described: Such issues should be reported to our Technical Support Department within 30 days from the date of the purchase. Clear evidence must be provided proving that the purchased product is not as it is described on the website. Complaints, which are based merely on the customer’s false expectations or wishes, are not honored.
                                </li>
                                <li>
                                     Children Policy- Only persons age 18 or older have permission to access our Product. Our Products do not address anyone under the age of 13 (“Children”). We do not knowingly collect personally identifiable information from children under 13. If you are a parent or guardian and you learn that your Children have provided us with Personal Information, please contact us. If we become aware that we have collected Personal Information from a child under the age of 13 without verification of parental consent, we take steps to remove that information and cancel the order immediately.
                                </li>
                            </ul>
                        </p>
                        <p class="pl-2"><b>6. Email Disclaimer </b></p>
                        <p>
                            Please note that when we contact you by email, such communications are always secure. We are not responsible for any unauthorized alterations or modifications made to any of our email messages. We make no warranty of any kind with respect to the accuracy of the contents of any of our emails. If you require confirmation of the contents of any of our emails, please contact us.
                        </p>
                        <p class="pl-2"><b>7. Prohibited Uses </b></p>
                        <p>
                            You may use the company site only for lawful purposes and in accordance with these Terms of Use. When a user violates any applicable federal, state, local or international law regulations with an intention and purpose of exploiting or harming the assets by exposing them to inappropriate content then the user will be asked for expulsion from further relations and the case will be handled by our enterprise against him/her.
                        </p>
                        <p class="pl-2"><b>8. Intellectual Property</b></p>
                        <p>
                            The design, template, and its original content, features, and functionality are and will remain the exclusive property of {{ env('APP_NAME') }} and its directors. The template is protected in both the United States and foreign countries. Our products and design dress may not be used in connection with any other product or service without the prior written consent of {{ env('APP_NAME') }}.
                        </p>
                        <p class="pl-2"><b>9. Links to Other Web Sites</b></p>
                        <p>
                            Our service may contain links to third party websites or services that are not owned or controlled by {{ env('APP_NAME') }}. {{ env('APP_NAME') }}  has no control over and assumes no responsibility for the content, privacy policies, or practices of any third party websites or services. We do not warrant the offerings of any of these entities/individuals or their websites. You acknowledge and agree that {{ env('APP_NAME') }} shall not be responsible or liable, directly or indirectly, for any damage or loss caused or alleged to be caused by or in connection with the use of or reliance on any such content, goods, or services available on or through any such third-party websites or services. We strongly advise you to read the terms and conditions and privacy policies of any third-party websites or services that you visit.
                        </p>
                        <p class="pl-2"><b>10. Indemnification</b></p>
                        <p>
                            You agree to defend, indemnify and hold harmless {{ env('APP_NAME') }} and their employees, contractors, agents, officers, and directors, from and against any and all claims, damages, obligations, losses, liabilities, costs or debt, and expenses (including but not limited to attorney’s fees), resulting from or arising out of a) your use and access of the Service, by you or any person using your account and password; b) a breach of these Terms or c) Content posted on the Service.
                        </p>

                        <p class="pl-2"><b>11. Limitation Of Liability</b></p>
                        <p>
                            In no event shall {{ env('APP_NAME') }}, nor its directors, employees, partners, agents, suppliers, or affiliates, be liable for any indirect, incidental, special, consequential, or punitive damages, including without limitation, loss of profits, data, use, goodwill, or other intangible losses, resulting from (i) your access to or use of or inability to access or use the Service; (ii) any conduct or content of any third party on the Service; (iii) any content obtained from the Service; and (iv) unauthorized access, use or alteration of your transmissions or content, whether based on warranty, contract, tort (including negligence) or any other legal theory, whether or not we have been informed of the possibility of such damage, and even if a remedy set forth herein is found to have failed of its essential purpose.
                        </p>

                        <p class="pl-2"><b>12. Disclaimer</b></p>
                        <p>
                            Your use of the template design is at your sole risk. The template is provided on an “AS IS” and “AS AVAILABLE” basis. The template is provided without warranties of any kind, whether express or implied, including, but not limited to, implied warranties of merchantability, fitness for a particular purpose, non-infringement, or course of performance. {{ env('APP_NAME') }}, its subsidiaries, and affiliates, do not warrant that a) the service will function uninterrupted, secure, or available at any particular time or location; b) any errors or defects will be corrected; c) the service is free of viruses or other harmful components, or d) the results of using the Service will meet your requirements.
                        </p>

                        <p class="pl-2"><b>13. Exclusions</b></p>
                        <p>
                            Some jurisdictions do not allow the exclusion of certain warranties or the exclusion or limitation of liability for consequential or incidental damages, so the limitations above may not apply to you.
                        </p>

                        <p class="pl-2"><b>14. Changes</b></p>
                        <p>
                            We reserve the right, at our sole discretion, to modify or replace these terms at any time. If a revision is material we will provide at least 30 days’ notice prior to any new terms taking effect. What constitutes a material change will be determined at our sole discretion.
                            By continuing to access or use our Service after any revisions become effective, you agree to be bound by the revised terms. If you do not agree to the new terms, you are no longer authorized to use the service.
                        </p>

                        <p class="pl-2"><b>14. Changes</b></p>
                        <p>
                            We reserve the right, at our sole discretion, to modify or replace these terms at any time. If a revision is material we will provide at least 30 days’ notice prior to any new terms taking effect. What constitutes a material change will be determined at our sole discretion.
                            By continuing to access or use our Service after any revisions become effective, you agree to be bound by the revised terms. If you do not agree to the new terms, you are no longer authorized to use the service.
                        </p>

                        <p class="pl-2"><b>Contact Us</b></p>
                        <p>If you have any questions about the practices of this site or your dealings<br>with this site,
                            please contact:</p>
                            <strong>
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
