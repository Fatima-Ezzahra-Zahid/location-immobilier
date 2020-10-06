@extends('layouts.masterPage')

@section('content')
<section id="nav">

    <nav class="navbar navbar-expand-lg navbar-dark bgg p-3 fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/homePage') }}"><img src="{{'image/logo.png'}}"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto disp">

                    <li class="nav-item  pr-5">
                        <a class="nav-link" href="{{ url('/homePage') }}">
                            Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item  pr-5 active">
                        <a class="nav-link" href="{{ url('/Properties') }}">Properties<span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item pr-5 links s">
                        @if (Route::has('login'))
                        @auth
                        <a class="a" href="{{ url('/form') }}">Form</a>
                        @else
                        <i class="fas fa-user us"></i>
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

</section>



<section id="properties">
    <div class="box2">
        <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="col-12 text-center">
                    <section class="search-sec bg">
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
                                                    <option value="{{ $data->name_cities }}">{{ $data->name_cities }}</option>
                                                    @endforeach
                                                </datalist>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-12 pr-3 resp">
                                                <select class="form-control search-slt" id="exampleFormControlSelect2">
                                                    <option>All types</option>
                                                    @foreach ($types_array as $data)
                                                    <option value="{{ $data->id }}">{{ $data->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-12 pr-3 resp">
                                                <input type="text" class="form-control search-slt" id="exampleFormControlSelect2" placeholder="Max price In DH">
                                            </div>
                                            <div class="col-lg-3 col-md-4 col-sm-12 pr-3 resp">
                                                <input type="text" class="form-control search-slt" id="exampleFormControlSelect2" placeholder="Min price IN DH">
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
    </div>



</section>

<section class="all">

    <div class="container">

        <div class="row">
        @foreach($forms as $form)
            <div class="col-md-4 mb-3  line-content">
            
                <div class="card">
                    <img class="img-fluid imge" alt="100%x280" src="{{'image/house1.jpg'}}">
                    <div class="card-body">
                        <h4 class="card-title">{{$form->title}}</h4>
                        <p class="card-text">{{$form->price}}DH/Month</p>
                        <hr>
                        <div class="flex">
                            <i class="fas fa-map-marker-alt pr-3"></i>
                            <p class="card-text">{{$form->District}} in {{$form->cities_name}}</p>
                        </div>

                    </div>

                </div>

            </div>
            @endforeach 
            <!-- <div class="col-md-4 mb-3 line-content">
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
            <div class="col-md-4 mb-3 line-content">
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

            <div class="col-md-4 mb-3 line-content">
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

            <div class="col-md-4 mb-3 line-content">
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
            <div class="col-md-4 mb-3 line-content">
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
            <div class="col-md-4 mb-3 line-content">
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

            <div class="col-md-4 mb-3 line-content">
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


            <div class="col-md-4 mb-3 line-content">
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


            <div class="col-md-4 mb-3 line-content">
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

            <div class="col-md-4 mb-3 line-content">
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


            <div class="col-md-4 mb-3 line-content">
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


            <div class="col-md-4 mb-3 line-content">
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



            <div class="col-md-4 mb-3 line-content">
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



            <div class="col-md-4 mb-3 line-content">
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




            <div class="col-md-4 mb-3 line-content">
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
            </div> -->


        </div>


        <!-- paginatoin-area Start -->
        <div class="row align-items-center h-100">
            <div class="col-12 text-center">
                <ul id="pagin">
                </ul>
            </div>
        </div>
        <!--// paginatoin-area End -->

    </div>

</section>








@endsection
