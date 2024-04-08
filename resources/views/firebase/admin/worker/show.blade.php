@extends('firebase.app')

@section('content')

    <!-- Styles -->
    <link href="/css/styles.css" rel="stylesheet">

    <div class="container" style="margin-top: 60px;">
        <div class="row">
            <div class="col-md-12 p-5">
                <div class="card">
                    <div class="card-header" style="background-color: #B3BDF2">
                        <h4 class="title-font" style="color: #0420BF">Worker Details
                            <a href="{{ url('work-index') }}" class="btn btn-sm btn-outline-danger float-end">BACK TO INDEX</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div>
                            <h2 class="title-font">Email: </h2>
                            <p class="body-font">{{ $worker['email'] }}</p>
                        </div>
                        <div>
                            <h2 class="title-font">Password: </h2>
                            <p class="body-font">{{ $worker['password'] }}</p>
                        </div>
                        <div>
                            <h2 class="title-font">First Name: </h2>
                            <p class="body-font">{{ $worker['first_name'] }}</p>
                        </div>
                        <div>
                            <h2 class="title-font">Middle Name: </h2>
                            <p class="body-font">{{ $worker['middle_name'] }}</p>
                        </div>
                        <div>
                            <h2 class="title-font">Last Name: </h2>
                            <p class="body-font">{{ $worker['last_name'] }}</p>
                        </div>
                        <div>
                            <h2 class="title-font">Birthday: </h2>
                            <p class="body-font">{{ $worker['birth_date'] }}</p>
                        </div>
                        <div>
                            <h2 class="title-font">Mobile Number: </h2>
                            <p class="body-font">{{ $worker['phone_number'] }}</p>
                        </div>
                        <div>
                            <h2 class="title-font">Landline Number: </h2>
                            <p class="body-font">{{ $worker['landline_number'] }}</p>
                        </div>
                        <div>
                            <h2 class="title-font">Rating: </h2>
                            <p class="body-font">{{ $worker['rating'] }}</p>
                        </div>
                        <div>
                            <h2 class="title-font">Verification: </h2>
                            <p class="body-font">{{ $worker['verification'] }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
