<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Forensic Science Pakistan</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Styles -->
    <style>

    </style>
</head>
<body class="antialiased">
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <div class="d-flex flex-row align-items-center">
            <a class="navbar-brand me-0 pe-0" href="{{ route('home') }}">
                <img src="{{ asset('images/FSP.png') }}" alt="Logo" width="50" class="d-inline-block align-text-top">
            </a>
            <h1 class="ms-2"><a href="{{ route('home') }}" class="text-dark" style="text-decoration: none;">{{ config('app.name') }}</a></h1>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
<nav class="navbar navbar-expand-lg bg-body">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('about') }}">About</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Collaborations
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Audio & Video</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Articles
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
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Alumni
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Test</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
    <div class="carousel-indicators">
        @foreach(File::files(public_path('forensic_science_home_slideshow')) as $key => $file)
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $key }}" @if($key === 0) class="active" @endif aria-current="true" aria-label="Slide {{ $key }}"></button>
        @endforeach
    </div>
    <div class="carousel-inner">
        @foreach(File::files(public_path('forensic_science_home_slideshow')) as $key => $file)
            <div class="carousel-item @if($key === 0) active @endif">
                <img src="{{ asset('forensic_science_home_slideshow/'.$file->getFilename()) }}" width="100%" height="580" style="background-size: cover; background-repeat: no-repeat" class="d-block" alt="...">
            </div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

{{--<div class="section container-fluid" style="background: #f7f7f7">--}}
{{--    <div class="h1 ps-2 pt-5">Dean's Office</div>--}}
{{--    <div class="h4 mt-2 ps-2" style="font-weight: normal">Professor --------</div>--}}
{{--    <div class="mt-3 ps-2">--}}
{{--        <div class="d-flex flex-col" style="width: calc(100% + 50px); max-width: calc(100% + 50px);">--}}
{{--            <img src="{{ asset('images/SusanB-1-350x263.jpg') }}" alt="">--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
