@extends('layouts.masterPage')

@section('content')


<nav class="navbar navbar-expand-lg navbar-dark bgg p-3 fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/homePage') }}"><img src="{{'image/logo.png'}}"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" href="{{ url('/homePage') }}" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Home
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" data-toggle="collapse" data-target=".navbar-collapse"
                            href="#types">WHAT ARE YOU LOOKING FOR?</a>
                    </div>
                </li>

                <li class="nav-item ">
                    <a class="nav-link" data-toggle="collapse" data-target=".navbar-collapse" href="#newly"> Newly
                        Added<span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link" data-toggle="collapse" data-target=".navbar-collapse" href="#about">About
                        Us<span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item ">
                    <a class="nav-link" data-toggle="collapse" data-target=".navbar-collapse" href="#popular">Popular
                        location<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="{{ url('/Properties') }}">Properties<span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item links">
                    @if (Route::has('login'))
                    @auth
                    <a class="a" href="{{ url('/form') }}">Form</a>
                    @else
                    <i class="fas fa-user  us"></i>
                    <a class="a" href="{{ route('login') }}">Login/</a>

                    @if (Route::has('register'))
                    <a class="a" href="{{ route('register') }}">Register</a>
                    @endif
                    @endauth
                    @endif
                </li>
            </ul>
            <a href="{{ url('/form') }}"><button class="btn btn-outline-success my-2 my-sm-0">Submit Property</button></a> 
        </div>
</nav>



<header class="masthead" id="header">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 text-center">
                <h1 class="title  wh">Rent & Lease Property Here</h1>
                <p class="lead  wh mini-title">Need a perfect place to live right now?

                    Here’s the best offer for you! Amazing house with the most comfort layout is fully equipped with
                    everything needed.</p>


                <section class="search-sec">
                    <div class="container">
                        <form action="#" method="post" novalidate="novalidate">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 col-sm-12 pr-3 resp">
                                            <input type="text" name="city" list="cityname"
                                                class="form-control search-slt" placeholder="All cities">
                                            <datalist id="cityname">
                                                @foreach ($cities_array as $data)
                                                <option value="{{ $data->name_cities}}">{{ $data->name_cities }}</option>
                                                @endforeach
                                            </datalist>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12 pr-3 resp">
                                            <select class="form-control search-slt" id="exampleFormControlSelect1">
                                                <option>All types</option>
                                                @foreach ($types_array as $data)
                                                <option value="{{ $data->id }}">{{ $data->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-12 pr-3 resp">
                                            <button type="button" class="btn  wrn-btn">FIND PROPERTIES</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </section>

            </div>
        </div>
    </div>


</header>



<section id="newly">
    <div class="container">

        <div class="row justify-content-center">
            <h1 class="titre">Newly Added</h1>
        </div>
        <hr class="hrr">

        <div class="row">
            <div class="col-6">

            </div>
            <div class="col-6 text-right">
                <a class="btn btn-primary mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                    <i class="fa fa-arrow-left"></i>
                </a>
                <a class="btn btn-primary mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                    <i class="fa fa-arrow-right"></i>
                </a>
            </div>
            <div class="col-12">
                <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">

                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid imge" alt="100%x280" src="{{'image/house1.jpg'}}">
                                        <div class="card-body">
                                            <h4 class="card-title">Miramar Résidences</h4>
                                            <p class="card-text">5000DH/MONTH</p>
                                            <hr>
                                            <div class="flex">
                                                <i class="fas fa-map-marker-alt pr-3"></i>
                                                <p class="card-text">Centre Ville in Mohammédia</p>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid imge" alt="100%x280" src="{{'image/house2.jpg'}}">
                                        <div class="card-body">
                                            <h4 class="card-title">Miramar Résidences</h4>
                                            <p class="card-text">5000DH/MONTH</p>
                                            <hr>
                                            <div class="flex">
                                                <i class="fas fa-map-marker-alt pr-3"></i>
                                                <p class="card-text">Centre Ville in Mohammédia</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid imge" alt="100%x280" src="{{'image/house3.jpg'}}">
                                        <div class="card-body">
                                            <h4 class="card-title">Miramar Résidences</h4>
                                            <p class="card-text">5000DH/MONTH</p>
                                            <hr>
                                            <div class="flex">
                                                <i class="fas fa-map-marker-alt pr-3"></i>
                                                <p class="card-text">Centre Ville in Mohammédia</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">

                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid imge" alt="100%x280" src="{{'image/house3.jpg'}}">
                                        <div class="card-body">
                                            <h4 class="card-title">Miramar Résidences</h4>
                                            <p class="card-text">5000DH/MONTH</p>
                                            <hr>
                                            <div class="flex">
                                                <i class="fas fa-map-marker-alt pr-3"></i>
                                                <p class="card-text">Centre Ville in Mohammédia</p>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid imge" alt="100%x280" src="{{'image/house4.jpg'}}">
                                        <div class="card-body">
                                            <h4 class="card-title">Miramar Résidences</h4>
                                            <p class="card-text">5000DH/MONTH</p>
                                            <hr>
                                            <div class="flex">
                                                <i class="fas fa-map-marker-alt pr-3"></i>
                                                <p class="card-text">Centre Ville in Mohammédia</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid imge" alt="100%x280" src="{{'image/house5.jpg'}}">
                                        <div class="card-body">
                                            <h4 class="card-title">Miramar Résidences</h4>
                                            <p class="card-text">5000DH/MONTH</p>
                                            <hr>
                                            <div class="flex">
                                                <i class="fas fa-map-marker-alt pr-3"></i>
                                                <p class="card-text">Centre Ville in Mohammédia</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">

                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid imge" alt="100%x280" src="{{'image/house6.jpg'}}">
                                        <div class="card-body">
                                            <h4 class="card-title">Miramar Résidences</h4>
                                            <p class="card-text">5000DH/MONTH</p>
                                            <hr>
                                            <div class="flex">
                                                <i class="fas fa-map-marker-alt pr-3"></i>
                                                <p class="card-text">Centre Ville in Mohammédia</p>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid imge" alt="100%x280" src="{{'image/house7.jpg'}}">
                                        <div class="card-body">
                                            <h4 class="card-title">Miramar Résidences</h4>
                                            <p class="card-text">5000DH/MONTH</p>
                                            <hr>
                                            <div class="flex">
                                                <i class="fas fa-map-marker-alt pr-3"></i>
                                                <p class="card-text">Centre Ville in Mohammédia</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                        <img class="img-fluid imge" alt="100%x280" src="{{'image/house8.jpg'}}">
                                        <div class="card-body">
                                            <h4 class="card-title">Miramar Résidences</h4>
                                            <p class="card-text">5000DH/MONTH</p>
                                            <hr>
                                            <div class="flex">
                                                <i class="fas fa-map-marker-alt pr-3"></i>
                                                <p class="card-text">Centre Ville in Mohammédia</p>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section id="about">
    <div class="box">

        <h2>About Us</h2>
        <p>

            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit, harum.
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facere, nihil nobis. Perspiciatis fugit, tempora
            ut eius reiciendis
            vero modi repudiandae! Voluptatem velit ab accusamus nesciunt laborum dignissimos repellat voluptatum eos
            itaque sed,
            vel ullam eius ut laboriosam animi repudiandae commodi quibusdam amet nobis quis quae facilis illum minima.
            Aliquam, at.

        </p>

    </div>


</section>

<section id="popular">


    <div class="row justify-content-center r">
        <h1 class="titre">Popular location</h1>
    </div>
    <hr class="hrr">

    <div class="container con">
        <div class="row r">
            <div class="col-md-4 cl">
                <div class="card c">
                    <img src="{{'image/casa.jpg'}}">
                    <div class="card-text ct">
                        <h3>Casablanca</h3>
                        <h5>3Listing</h5>
                    </div>

                </div>

            </div>

            <div class="col-md-4 cl">
                <div class="card c">
                    <img src="{{'image/rabat.jpg'}}">
                    <div class="card-text ct">
                        <h3>Rabat</h3>
                        <h5>3Listing</h5>
                    </div>

                </div>

            </div>

            <div class="col-md-4 cl">
                <div class="card c ">
                    <img src="{{'image/tanger.jpg'}}">
                    <div class="card-text ct">
                        <h3>Tanger</h3>
                        <h5>3Listing</h5>
                    </div>

                </div>

            </div>

        </div>




        <div class="row r">
            <div class="col-md-4 cl">
                <div class="card c">
                    <img src="{{'image/marrakech.jpg'}}">
                    <div class="card-text ct">
                        <h3>Marrakech</h3>
                        <h5>3Listing</h5>
                    </div>

                </div>

            </div>

            <div class="col-md-4 cl">
                <div class="card c">
                    <img src="{{'image/safi.jpg'}}" class="imge">
                    <div class="card-text ct">
                        <h3>Safi</h3>
                        <h5>3Listing</h5>
                    </div>

                </div>

            </div>

            <div class="col-md-4 cl">
                <div class="card c">
                    <img src="{{'image/agadir.jpg'}}">
                    <div class="card-text ct">
                        <h3>Agadir</h3>
                        <h5>3Listing</h5>
                    </div>

                </div>

            </div>

        </div>

    </div>


</section>


<section id="types">


    <div class="row justify-content-center r">
        <h1 class="titre">What are you looking for?</h1>

    </div>
    <hr class="hrr">

    <!-- Slider main container -->
    <div class="swiper-container">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
                <div class="picture">
                    <img src="{{'image/apparetments.jpg'}}">
                </div>
                <div class="detail">
                    <h3>Apartments</h3>
                    <span>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit, harum.
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facere, nihil nobis. Perspiciatis
                        fugit, tempora
                        ut eius reiciendis</span>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="picture">
                    <img src="{{'image/house.jpg'}}">
                </div>
                <div class="detail">
                    <h3>House</h3>
                    <span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit, harum.
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facere, nihil nobis. Perspiciatis
                        fugit, tempora
                        ut eius reiciendis</span>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="picture">
                    <img src="{{'image/villa.jpg'}}">
                </div>
                <div class="detail">
                    <h3>Villa</h3>
                    <span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit, harum.
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facere, nihil nobis. Perspiciatis
                        fugit, tempora
                        ut eius reiciendis</span>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="picture">
                    <img src="{{'image/garages.jpg'}}">
                </div>
                <div class="detail">
                    <h3>Garage</h3>
                    <span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit, harum.
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facere, nihil nobis. Perspiciatis
                        fugit, tempora
                        ut eius reiciendis</span>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="picture">
                    <img src="{{'image/les magazins.png'}}">
                </div>
                <div class="detail">
                    <h3>Stores</h3>
                    <span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit, harum.
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facere, nihil nobis. Perspiciatis
                        fugit, tempora
                        ut eius reiciendis</span>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="picture">
                    <img src="{{'image/chambre.jpg'}}">
                </div>
                <div class="detail">
                    <h3>Bedroom</h3>
                    <span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit, harum.
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facere, nihil nobis. Perspiciatis
                        fugit, tempora
                        ut eius reiciendis</span>
                </div>
            </div>

        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-scrollbar"></div>
    </div>



</section>



<section class="annonce">

    <div class="para">


        <h1 class="ml6 row rr h-100 justify-content-center align-items-center">
            <span class="text-wrapper">
                <span class="letters">We help people and homes find each other</span>
            </span>
        </h1>

    </div>

    <script>
        /* animation text */

        var textWrapper = document.querySelector('.ml6 .letters');
        textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

        anime.timeline({
                loop: true
            })
            .add({
                targets: '.ml6 .letter',
                translateY: ["1.1em", 0],
                translateZ: 0,
                duration: 750,
                delay: (el, i) => 50 * i
            }).add({
                targets: '.ml6',
                opacity: 0,
                duration: 1000,
                easing: "easeOutExpo",
                delay: 1000
            });

    </script>


</section>

@endsection
