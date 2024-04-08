@extends('firebase.app')

@section('content')

    <!-- Styles -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

    <body class="bgcolor">
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="border rounded-5 p-3 shadow box-area text-center" style="max-width: 350px; background: #B6BFF2;">
            <form id="mainForm">
                <h1 class="title-font mb-4" style="color: #0717b2;">Register Here</h1>
                <input id="email" type="email" class="form-control mb-2" placeholder="Email Address" required autofocus>
                <input id="first_name" type="text" class="form-control mb-2" placeholder="First Name">
                <input id="middle_name" type="text" class="form-control mb-2" placeholder="Middle Name">
                <input id="last_name" type="text" class="form-control mb-2" placeholder="Last Name">
                <input id="password" type="password" class="form-control" placeholder="Password">
                <div class="mt-3">
                    <button class="btn btn-lg btn-primary btn-block" type="submit">REGISTER</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Firebase SDK -->
    <script src="https://www.gstatic.com/firebasejs/10.7.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/10.7.1/firebase-database.js"></script>
    <script src="https://www.gstatic.com/firebasejs/10.7.1/firebase-auth.js"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

    <script type="module" src="{{ asset('js/firebase_register.js') }}"></script>
    </body>

@endsection

