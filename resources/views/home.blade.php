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

<img src="/img/bee.jpg">
                <div class="collapse navbar-collapse " id="navbarNav">
                    <ul class="nav navbar-nav mx-auto">
                        <li class="nav-item text-dark">
                            <a class="nav-link text-dark active" aria-current="page" href="http://localhost/imker-2/public/">HOME</a>
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
                            <a class="nav-link text-dark" href="http://localhost/imker-2/public/contact">CONTACT</a>
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
            <p class="fs-3 fw-bold text-black">HET HOUDEN VAN BIJEN !</p>
            <p class="text-black fs-5 col-11 lh-base">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
                numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
                optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis
                obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam
            </p>

            <div class="row py-5">
                <div class="col">
                    <p class="fs-5 fw-bold text-black">Onze Activiteiten</p>
                    <p class="text-black fs-6 col-10 lh-base">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                        molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
                        numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium

                    </p>
                </div>
                <div class="col">
                    <p class="fs-5 fw-bold text-black">Wat te doen bij een bijenzwerm of hommelnest?</p>
                    <p class="text-black fs-6 col-10 lh-base">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                        molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
                        numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium

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
