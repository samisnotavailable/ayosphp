@extends('firebase.app')

@section('content')

    <!-- Styles -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

    <body class="bgcolor body-font">
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="border rounded-5 p-3 shadow box-area text-center" style="max-width: 350px; background: #B6BFF2;">
            <form id="mainForm">
                <h1 class="title-font mb-4" style="color: #0717b2;">Login Here</h1>
                <input id="email" type="email" class="form-control mb-2" placeholder="Email Address" required autofocus>
                <input id="password" type="password" class="form-control" placeholder="Password">
                <div class="mt-2 text-left">
                    <small><a id="forgot_password" href="#" style="color: #0717b2;">Forgot Password?</a></small>
                </div>
                <div class="mt-3">
                    <button class="btn btn-lg btn-primary btn-block" type="submit">LOGIN</button>
                </div>
            </form>
            <!--<div class="mt-2">
                <small><a href="{{ url('register') }}" style="color: #0717b2;">No account yet? Sign Up Here</a></small>
            </div> -->
        </div>
    </div>

    <script>
        const adminIndexRoute = "{{ url('admin-index') }}";
    </script>

    <!-- Firebase SDK -->
    <script src="https://www.gstatic.com/firebasejs/10.7.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/10.7.1/firebase-database.js"></script>
    <script src="https://www.gstatic.com/firebasejs/10.7.1/firebase-auth.js"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

    <script type="module" src="{{ asset('js/firebase_login.js') }}"></script>
    </body>

@endsection
