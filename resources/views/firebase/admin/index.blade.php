@extends('firebase.app')

@section('content')

    <!-- Styles -->
    <link href="/css/styles.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b92c4df2c6.js" crossorigin="anonymous"></script>

    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="border rounded-5 p-3 shadow box-area" style="max-width: 350px; background: #0420BF;">
            <h1 class="title-font mb-2 text-center" style="color: white;">Admin Table</h1>
            <div class="mt-2 ml-4 pl-5">
                <i class="fa-solid fa-circle-arrow-right" style="color: #d8cdf2;"></i>
                <a href="{{ url('cust-index') }}" style="color: white;">CUSTOMERS LIST</a>
            </div>
            <div class="mt-2 ml-4 pl-5">
                <i class="fa-solid fa-circle-arrow-right" style="color: #d8cdf2;"></i>
                <a href="{{ url('work-index') }}" style="color: white;">WORKERS LIST</a>
            </div>
            <div class="mt-2 ml-4 pl-5">
                <i class="fa-solid fa-circle-arrow-right" style="color: #d8cdf2;"></i>
                <a href="{{ url('book-index') }}" style="color: white;">BOOKINGS LIST</a>
            </div>
        </div>
    </div>

@endsection
