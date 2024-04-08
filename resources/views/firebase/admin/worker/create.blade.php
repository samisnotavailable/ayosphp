@extends('firebase.app')

@section('content')

    <!-- Styles -->
    <link href="/css/styles.css" rel="stylesheet">

    <div class="container" style="margin-top: 60px;">
        <div class="row">
            <div class="col-md-12 p-5">
                <div class="card">
                    <div class="card-header" style="background-color: #B3BDF2">
                        <h4 class="title-font" style="color: #0420BF">Create a Worker
                            <a href="{{ url('work-index') }}" class="btn btn-sm btn-outline-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('work-create') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="email" class="control-label">Email</label>
                                <input type="text" class="form-control" id="emailBox" name="email">
                            </div>
                            <div class="form-group mb-3">
                                <label for="password" class="control-label">Password</label>
                                <input type="password" class="form-control" id="passwordBox" name="password">
                            </div>
                            <div class="form-group mb-3">
                                <label for="first_name" class="control-label">First Name</label>
                                <input type="text" class="form-control" id="first_nameBox" name="first_name">
                            </div>
                            <div class="form-group mb-3">
                                <label for="middle_name" class="control-label">Middle Name</label>
                                <input type="text" class="form-control" id="middle_nameBox" name="middle_name">
                            </div>
                            <div class="form-group mb-3">
                                <label for="last_name" class="control-label">Last Name</label>
                                <input type="text" class="form-control" id="last_nameBox" name="last_name">
                            </div>
                            <div class="form-group mb-3">
                                <label for="birth_date" class="control-label">Birthday</label>
                                <input type="date" class="form-control" id="birth_dateBox" name="birth_date">
                            </div>
                            <div class="form-group mb-3">
                                <label for="phone_number" class="control-label">Mobile Number</label>
                                <input type="text" class="form-control" id="phone_numberBox" name="phone_number">
                            </div>
                            <div class="form-group mb-3">
                                <label for="landline_number" class="control-label">Landline Number</label>
                                <input type="text" class="form-control" id="landline_numberBox" name="landline_number">
                            </div>
                            <div class="form-group mb-3">
                                <label for="rating" class="control-label">Rating</label>
                                <input type="number" min="1" max="5" class="form-control" id="rating" name="rating">
                            </div>
                            <div class="form-group">
                                <label for="verification" class="control-label">Verification</label>
                                <select name="verification" class="form-control" id="verificationBox">
                                    <option value="true">True</option>
                                    <option value="false">False</option>
                                </select>
                            </div>

                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary">Save Worker</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
