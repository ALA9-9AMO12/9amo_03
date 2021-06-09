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
@yield('main')
<section class="navigation">
    <div class="container">

    <nav class=" navbar navbar-expand-lg bg-warning">
        <div class="container-fluid position-relative">


            <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="nav navbar-nav mx-auto">
                    <li class="nav-item text-dark">
                        <a class="nav-link text-dark active" aria-current="page" href="#">HOME</a>
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
                        <a class="nav-link text-dark" href="#">CONTACT</a>
                    </li>
                    <li class="nav-item text-dark">
                        <a class="nav-link text-dark" href="#">BERICHTEN</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
  </div>
</section>

<section class="breaking">
    <div class="container">
        <div class="col-9">

        </div>
        <div class="col-3">
            
        </div>
    </div>
</section>



<script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>
</html>
