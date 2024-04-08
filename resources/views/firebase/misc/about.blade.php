@extends('firebase.app')

@section('content')

    <!-- Styles -->
    <link href="/css/styles.css" rel="stylesheet">

    <body class="bgcolor body-font">
        <div class="container about-row">
            <div class="row">
                <div class="col-md-4 text-center">
                    <img class="rounded shadow" src="{{url('/img/about-denebho.jpg')}}" alt="Christian Deneb Ho" width="200" height="200">
                    <p class="title-font">Christian Deneb Ho</p>
                </div>
                <div class="col-md-4 text-center">
                    <img class="rounded shadow" src="{{url('/img/about-abimagpatoc.jpg')}}" alt="Abigail Magpatoc" width="200" height="200">
                    <p class="title-font">Abigail Magpatoc</p>
                </div>
                <div class="col-md-4 text-center">
                    <img class="rounded shadow" src="{{url('/img/about-samnoel.jpg')}}" alt="Juan Samuel Noel" width="200" height="200">
                    <p class="title-font">Juan Samuel Alvaro Noel</p>
                </div>
            </div>
        </div>

        <div class="about-header">
            <div class="container">
                <div class="row align-items-center">
                    <h2 class="title-font">About Ayos!</h2>
                    <p style="color: black; text-align: justify;">Ayos! was started by three college students, respectively named Christian Deneb
                        Ho, Abigail Magpatoc, and Juan Samuel Alvaro G. Noel, for their thesis project at the De La Salle College of Saint Benilde.
                        More than just an online booking platform, Ayos! was made to easily connect and bond customers to their local handymen, as well
                        as to create stable job opportunities for our handymen in Metro Manila. The team is dedicated to creating an app where
                        convenience, quality, and reliability come together, guaranteeing that every service you book via Ayos! Is a step closer to a
                        stress-free experience. With Ayos!, the days of time-consuming searches and never-ending phone calls for both customers and
                        handymen are over. </p>
                </div>
            </div>
        </div>

        <!-- Mission and Vision -->
        <div class="container">
            <div class="row">
                <!-- Mission Statement Column -->
                <div class="about-missionvision col-md-4">
                    <div class="">
                        <h3 class="title-font">Mission</h3>
                        <p style="color: black; text-align: justify;"><i>To provide high-quality maintenance for your home
                                on your time and at your need.</i><br><br>Our mission goes beyond being just an online service booking platform. We aim
                            to transform convenience by providing you with the services you require at the exact moment you need them. Our
                            mission is to improve your life and experiences by making it easier for you to obtain high-quality services
                            regularly (within Metro Manila). </p>
                    </div>
                </div>
                <!-- Vision Statement Column -->
                <div class="about-missionvision col-md-4" style="margin-left: 90px;">
                    <div class="">
                        <h3 class="title-font">Vision</h3>
                        <p style="color: black; text-align: justify;"><i>To make every house a safer home.</i><br><br>As an online service
                            booking platform, the objective is to become the preferred choice for anyone looking for dependable, easy access to
                            a variety of home services. We believe in making a world in which booking services are an enjoyable experience
                            rather than just a transaction, making sure that Ayos! is known for its unmatched level of convenience, quality, and
                            reliability.</p>
                    </div>
                </div>
            </div>
        </div>
    </body>
@endsection
