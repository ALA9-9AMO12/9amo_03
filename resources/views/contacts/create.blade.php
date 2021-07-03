@extends('base')
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"

          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imker vereniging</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"

        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"

        crossorigin="anonymous"></script>
@section('main')

    <div class="header">
        <img src="../img/bee.jpg" alt="bee" style="margin-left:250px;height:300px;width:800px;">
        <h1 class="title" style="font-family:arizona;font-size:5rem;position:absolute;top:10vh;left:32vw;text-align:center;color:white;">Imkervereniging <br>Oegstgeest</h1>
    </div>

    <section class="navigation" style="width:100%;">


        <nav class=" navbar navbar-expand-lg bg-warning">
            <div class="container-fluid position-relative">


                <div class="collapse navbar-collapse " id="navbarNav">
                    <ul class="nav navbar-nav mx-auto">
                        <li class="nav-item text-dark">
                            <a class="nav-link text-dark active" aria-current="page" href="http://localhost/imker/public/">HOME</a>
                        </li>
                        <li class="nav-item text-dark">
                            <a class="nav-link text-dark" href="#">BASISCURSUS</a>
                        </li>
                        <li class="nav-item text-dark">
                            <a class="nav-link text-dark" href="#">INFORMATIE</a>
                        </li>
                        <li class="nav-item text-dark">
                            <a class="nav-link text-dark" href="#">LINKS</a>
                        </li>
                        <li class="nav-item text-dark">
                            <a class="nav-link text-dark" href="{{ route('contacts.create')}}">CONTACT</a>
                        </li>
                        <li class="nav-item text-dark">
                            <a class="nav-link text-dark" href="#">BERICHTEN</a>

                        </li>

                    </ul>
                </div>
            </div>
        </nav>

    </section>
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <h1 class="display-3">Add a contact</h1>
            <div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                @endif
                <form method="post" action="{{ route('contacts.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="first_name">First Name:</label>
                        <input type="text" class="form-control" name="first_name"/>
                    </div>

                    <div class="form-group">
                        <label for="last_name">Last Name:</label>
                        <input type="text" class="form-control" name="last_name"/>
                    </div>

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" class="form-control" name="email"/>
                    </div>
            </div>
            <button type="submit" class="btn btn-primary-outline">Add contact</button>
            </form>
        </div>
    </div>
    </div>
@endsection
