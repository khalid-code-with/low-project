@extends('include.master')

@section('title', 'Abouts Page')

@section('body-section')

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title></title>
    </head>

    <body>

        {{-- abouts bannere  --}}
        <section class="abouts-banner">
            <img src="{{ asset('images/abouts-img/abouts-banner.png') }}" alt="About Allan" class="abouts-banner-img">
            <div class="container">
                <div class="abouts-banner-content">
                    <h1>About Allan Rouben</h1>
                </div>
            </div>
        </section>
        {{-- end abouts bannere --}}
        <section class="contacts-layout-section">
            <div class="container">
                <div class="contacts-layout-content">
                    <h2 class="contacts-layout-title">Contact Allan Rouben Today</h2>
                    <a href="#" class="consultation-btn">BOOK A FREE CONSULTATION</a>
                </div>
            </div>
        </section>
        {{-- end contact section --}}


    </body>

@endsection
