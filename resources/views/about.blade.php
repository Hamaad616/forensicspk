<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Forensic Science Pakistan</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Roboto:400,600&display=swap" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Styles -->
    <style>
        body {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        p {
            line-height: 1.6;
            text-align: justify;
            margin: 0;
            font-size: 14px;
        }
    </style>
</head>
<body class="antialiased">
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <div class="d-flex flex-row align-items-center">
            <a class="navbar-brand me-0 pe-0" href="{{ route('home') }}">
                <img src="{{ asset('images/FSP.png') }}" alt="Logo" width="50" class="d-inline-block align-text-top">
            </a>
            <h1 class="ms-2"><a href="{{ route('home') }}" class="text-dark"
                                style="text-decoration: none">{{ config('app.name') }}</a></h1>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            {{--            <ul class="navbar-nav me-auto mb-2 mb-lg-0">--}}
            {{--                <li class="nav-item">--}}
            {{--                    <a class="nav-link active" aria-current="page" href="{{ route('about') }}">About</a>--}}
            {{--                </li>--}}

            {{--                <li class="nav-item dropdown">--}}
            {{--                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">--}}
            {{--                        Disciplines--}}
            {{--                    </a>--}}
            {{--                    <ul class="dropdown-menu">--}}
            {{--                        <li><a class="dropdown-item" href="#">Audio & Video</a></li>--}}
            {{--                        <li><a class="dropdown-item" href="#">Blood Stains</a></li>--}}
            {{--                        <li><a class="dropdown-item" href="#">CSI</a></li>--}}
            {{--                        <li><a class="dropdown-item" href="#">Digital Evidence</a></li>--}}
            {{--                        <li><a class="dropdown-item" href="#">DNA</a></li>--}}
            {{--                        <li><a class="dropdown-item" href="#">CSI</a></li>--}}
            {{--                        <li><a class="dropdown-item" href="#">Drugs</a></li>--}}
            {{--                        <li><a class="dropdown-item" href="#">Evidence & Witnesses</a></li>--}}
            {{--                        <li><hr class="dropdown-divider"></li>--}}
            {{--                        <li class="dropdown-item"><a href="#">View More</a></li>--}}
            {{--                    </ul>--}}
            {{--                </li>--}}
            {{--            </ul>--}}
            <form class="d-flex ms-auto" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>
<nav class="navbar navbar-expand-lg bg-body border">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link @if(Route::is('about')) active @endif" aria-current="page"
                       href="{{ route('about') }}">About</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                       aria-expanded="false">
                        Collaborations
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Audio & Video</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                       aria-expanded="false">
                        Disciplines
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Audio & Video</a></li>
                        <li><a class="dropdown-item" href="#">Blood Stains</a></li>
                        <li><a class="dropdown-item" href="#">CSI</a></li>
                        <li><a class="dropdown-item" href="#">Digital Evidence</a></li>
                        <li><a class="dropdown-item" href="#">DNA</a></li>
                        <li><a class="dropdown-item" href="#">CSI</a></li>
                        <li><a class="dropdown-item" href="#">Firearms</a></li>
                        <li><a class="dropdown-item" href="#">Toxicology</a></li>
                        <li><a class="dropdown-item" href="#">Fingerprints</a></li>
                        <li><a class="dropdown-item" href="#">Questioned Documents</a></li>
                        <li><a class="dropdown-item" href="#">Evidence & Witnesses</a></li>
                        <li><a class="dropdown-item" href="#">Forensic Entomology</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="section">
    <div class="row justify-content-center">
        <div class="col-lg-8 bg-light mt-5 p-4">
            <div class="ps-2">
                <h1>About</h1>
                <div style="height: 2px;
                    background: #ddd;
                    margin-top: 30px;
                    margin-bottom: 30px;">
                </div>
                <div class="">
                    <figure style="float: right">
                        <img src="{{ asset('images/professor.jpg') }}" alt="professor" height="250" style="float: right; box-sizing: border-box;
                max-width: 100%;
                vertical-align: bottom;
                margin-left: 18px;
                ">
                        <figcaption style="text-align: center; opacity: .5; font-size: 12px; margin-top: 16rem">Dr
                            Inamullah, Forensic Scientist
                        </figcaption>
                    </figure>
                    <strong class="mt-2 mb-2">Mission Statement</strong>
                    <p class="mb-0" style="counter-reset: footnotes;">
                        Forensic Pakistan is dedicated to its mission of advancing forensic science in Pakistan. We are
                        committed to empowering justice, promoting accountability, and ensuring a just society. Our
                        platform serves as a comprehensive resource hub, providing access to accurate information,
                        fostering expert knowledge, and encouraging collaboration among professionals in the field. Our
                        primary goal is to improve the quality and reliability of forensic evidence presented in courts,
                        enhance investigative procedures, and contribute to a more equitable and informed criminal
                        justice system in Pakistan. With a commitment to excellence, integrity, and transparency, we aim
                        to play a pivotal role in improving legal outcomes, upholding the principles of fairness, and
                        enhancing the role of forensics in the country.
                    </p>
                </div>
                <div class="mt-2">
                    <strong>Contact Information</strong>
                    <br>
                    Dr Inamullah
                    <br>
                    PHD
                    <br>
                    Forensic Genetics, Molecular Genetics Ancient DNA
                    <br>
                    <a href="mailto:inamgenetics@gmail.com"
                       style="text-decoration: underline">inamgenetics@gmail.com</a>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>
</html>
