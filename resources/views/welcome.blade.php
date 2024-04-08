@extends('firebase.app')

@section('content')


    <!-- Styles -->
    <link href="/css/styles.css" rel="stylesheet">

    <body class="bgcolor body-font">
        <header class="page-header">
            <div class="container pt-3">
                <div class="row align-items-center justify-content-center">

                    <div class="col-md-5">
                        <h2 class="title-font">Your Online Gateway to Seamless Service Booking!</h2>
                        <p>Ayos! is the first app in Metro Manila to offer full home repair and services, ready for customers to avail and connect to certified repairmen around their area with just one download.</p>
                        <a href="{{ url('login') }}">
                            <button type="button" class="btn btn-outline-primary btn-lg">
                                Ayos! Now
                            </button>
                        </a>
                    </div>

                    <div class="col-md-5">
                        <img class="header-resize" src="{{ url('/img/ayos_mainlogo.png') }}" alt="ayos_mainlogo">
                    </div>

                </div>
            </div>
        </header>
    </body>

@endsection
