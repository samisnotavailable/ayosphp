@extends('firebase.app')

@section('content')

    <!-- Styles -->
    <link href="/css/styles.css" rel="stylesheet">

    <body class="bgcolor body-font">

        <div class="index-body container">
            <h1 class="title-font" style="color: #0717b2;">Frequently Asked Questions</h1>
        </div>
        <br>
        <div class="container d-flex align-items-center">
            <div class="accordion">
                <div class="accordion-item">
                    <button id="accordion-btn-1" class="accordion-btn toggle-font" aria-expanded="false">
                        <span class="accordion-title">What is Ayos! about?</span>
                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div id="accordion-content-1" class="accordion-content">
                        <p>Ayos! is an online service booking application that makes it simple for you to get in touch with a wide range of home services, including plumbing, electrical, air conditioning, and appliance repair. </p>
                    </div>
                </div>

                <div class="accordion-item">
                    <button id="accordion-btn-2" class="accordion-btn toggle-font" aria-expanded="false">
                        <span class="accordion-title">Who are the Ayos! service repairmen?</span>
                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div id="accordion-content-2" class="accordion-content">
                        <p>Ayos! Repairmen are directly hired by the company. They must obtain at least TESDA certification to be hired. So rest assured that Ayos! gives quality service to its customers.</p>
                    </div>
                </div>

                <div class="accordion-item">
                    <button id="accordion-btn-3" class="accordion-btn toggle-font" aria-expanded="false">
                        <span class="accordion-title">Is Ayos! available in my area?</span>
                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div id="accordion-content-3" class="accordion-content">
                        <p>Currently, the Ayos! Service is only limited to Metro Manila residents, but may also offer its service to nearby provinces in the near future.</p>
                    </div>
                </div>

                <div class="accordion-item">
                    <button id="accordion-btn-4" class="accordion-btn toggle-font" aria-expanded="false">
                        <span class="accordion-title">What services can I avail?</span>
                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div id="accordion-content-4" class="accordion-content">
                        <p>Ayos! offers repair and maintenance services for plumbing, air conditioning, electrical, and appliance issues at home.</p>
                    </div>
                </div>

                <div class="accordion-item">
                    <button id="accordion-btn-5" class="accordion-btn toggle-font" aria-expanded="false">
                        <span class="accordion-title">How do I book a service?</span>
                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div id="accordion-content-5" class="accordion-content">
                        <p>Easy! First, make a personal account. Kindly ensure all information is correct and legitimate. Once you are done creating your account, you can now book a service by simply choosing the service you would like to book (for plumbing, electrical wiring, airconditioning,and appliance) afterwards, set the time and date for when you want the service done. Confirm your payment method, and your booking is done. Ayos! di ba?</p>
                    </div>
                </div>

                <div class="accordion-item">
                    <button id="accordion-btn-6" class="accordion-btn toggle-font" aria-expanded="false">
                        <span class="accordion-title">How much does one service cost?</span>
                        <span class="icon" aria-hidden="true"></span>
                    </button>
                    <div id="accordion-content-" class="accordion-content">
                        <p>The initial service cost would start at ₱500 and may increase depending on the service and duration.</p>
                    </div>
                </div>
            </div>
        </div>
        <script type="module" src="{{ asset('js/script.js') }}"></script>

    </body>
@endsection
