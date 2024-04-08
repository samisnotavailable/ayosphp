@extends('firebase.app')

@section('content')

    <!-- Styles -->
    <link href="/css/styles.css" rel="stylesheet">

    <div class="container" style="margin-top: 60px;">
        <div class="row">
            <div class="col-md-12 p-5">
                <div class="card">
                    <div class="card-header" style="background-color: #B3BDF2">
                        <h4 class="title-font" style="color: #0420BF">Customer Details
                            <a href="{{ url('cust-index') }}" class="btn btn-sm btn-outline-danger float-end">BACK TO INDEX</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div>
                            <h2 class="title-font">Email: </h2>
                            <p class="body-font">{{ $customer['email'] }}</p>
                        </div>
                        <div>
                            <h2 class="title-font">Password: </h2>
                            <p class="body-font">{{ $customer['password'] }}</p>
                        </div>
                        <div>
                            <h2 class="title-font">First Name: </h2>
                            <p class="body-font">{{ $customer['first_name'] }}</p>
                        </div>
                        <div>
                            <h2 class="title-font">Middle Name: </h2>
                            <p class="body-font">{{ $customer['middle_name'] }}</p>
                        </div>
                        <div>
                            <h2 class="title-font">Last Name: </h2>
                            <p class="body-font">{{ $customer['last_name'] }}</p>
                        </div>
                        <div>
                            <h2 class="title-font">Birthday: </h2>
                            <p class="body-font">{{ $customer['birth_date'] }}</p>
                        </div>
                        <div>
                            <h2 class="title-font">Mobile Number: </h2>
                            <p class="body-font">{{ $customer['phone_number'] }}</p>
                        </div>
                        <div>
                            <h2 class="title-font">Landline Number: </h2>
                            <p class="body-font">{{ $customer['landline_number'] }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
