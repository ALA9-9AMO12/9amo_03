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
                        <a class="nav-link text-dark" href="#">CONTACT</a>
                    </li>
                    <li class="nav-item text-dark">
                        <a class="nav-link text-dark" href="#">BERICHTEN</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</section>
<section class="breaking">
    <div class="container-fluid row">
        <div class="col-9 py-5 my-5 px-5">
            <p class="fs-3 fw-bold text-black">Contact</p>
            <p class="text-black fs-5 col-11 lh-base">Het bestuur van de Imkervereniging Oegstgeest bestaat uit:<br><br>
                Alma van der wijgaard - voorzitter<br>
                Fred Schalker - Secretaris<br>
                Karel Diephuis - penningmeester<br>
                Havar Solheim - bestuur lid
            </p>

            <div class="row py-5">
                <div class="col">
                    <p class="fs-5 fw-bold text-black"></p>
                    <p class="text-black fs-6 col-10 lh-base">Voor vragen over de vereniging, of onze cursus, verstuur een mail naar onze secretaris.<br>

                        Voor vragen over de website zelf, neem contact op met de webmaster.

                    </p>
                </div>

            </div>


        </div>

        <div class="col-3 py-5 my-5">
            <p class="fs-4 fw-bold text-black">Bijenzwerm ?</p>
            <p class="text-black fs-6 lh-base">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
            </p>

            <p class="fs-4 fw-bold text-black mt-4">Onze imker helpt U!</p>
            <p class="text-black fs-6 lh-base">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia</p>

            <p class="fs-4 fw-bold text-black mt-4">Berichten</p>
            <p class="text-black fs-6 lh-base">Hier komen de nieuwste berichten</p>
        </div>
    </div>
</section>



<script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>
</html>

