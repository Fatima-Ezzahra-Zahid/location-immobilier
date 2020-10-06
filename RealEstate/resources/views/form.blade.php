@extends('layouts.app')

@section('content')



<div class="container">
@if(session()->has('successInfo'))
        <div class="alert alert-success">
            {{ session()->get('successInfo') }}
        </div>
    @endif
    <form method="post" action="{{url('/form')}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <table class="table table-striped">
            <tbody>
                <tr>
                    <td colspan="1">


                        <h4 class="f-title">fill in your personal information</h4>
                        <fieldset>


                            <div class="form-group">
                                <label class="col-md-4 control-label">Full Name <span class="et">*</span></label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group">
                                        <input id="fullName" name="full_name" placeholder="Full Name"
                                            class="form-control" required="true" value="{{old('full_name')}}"
                                            type="text">
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-md-4 control-label">Address <span class="et">*</span></label>
                                <div class="col-md-8 inputGroupContainer">
                                    <input id="addressLine1" name="address" placeholder="Address" class="form-control"
                                        required="true" value="{{old('address')}}" type="text">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Email <span class="et">*</span></label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group">
                                        <input id="email" name="email" placeholder="Email" class="form-control"
                                            required="true" value="{{old('email')}}" type="email">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Phone Number <span class="et">*</span></label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group">
                                        <input id="phoneNumber" name="Phone_Number" placeholder="Phone Number"
                                            class="form-control" required="true" value="{{old('Phone_Number')}}"
                                            type="tel">
                                    </div>
                                </div>
                            </div>

                        </fieldset>
                    </td>
                <tr>

                <tr>
                    <td colspan="1">
                        <h4 class="f-title">fill in your Properties information</h4>
                        <fieldset>

                            <label class="col-md-4 control-label">Types <span class="et">*</span></label>
                            <div class="col-md-8 inputGroupContainer">
                                <div class="input-group">
                                    <select class="selectpicker form-control" name="types_id" id="statut"
                                        required="true" onchange="change()">
                                        @foreach ($types_array as $data)
                                        <option value="{{ $data->id }}">{{ $data->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>


                            <div class="form-group">
                                <label class="col-md-4 control-label">Cities <span class="et">*</span></label>
                                <div class="col-md-8 inputGroupContainer">

                                    <input type="text" name="cities_name" list="cityname" class="form-control"
                                        required="true" placeholder="All cities">
                                    <datalist id="cityname">
                                        @foreach ($cities_array as $data)
                                        <option value="{{ $data->name_cities }}">{{$data->name_cities}}</option>
                                        @endforeach

                                    </datalist>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Other</span></label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group"><input id="District" name="autre"
                                            placeholder=" Other name citie" class="form-control"
                                            value="{{old('autre')}}" type="text">

                                    </div>
                                </div>
                            </div>



                            <div class="form-group">
                                <label class="col-md-4 control-label">Price in DH/month<span class="et">*</span></label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group"><span class="input-group-addon">
                                            <input id="District" name="price" placeholder="5000" class="form-control"
                                                required="true" value="{{old('price')}}" type="text">
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-md-4 control-label">District <span class="et">*</span></label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group">
                                        <input id="District" name="District" placeholder="District" class="form-control"
                                            required="true" value="{{old('District')}}" type="text">

                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-md-4 control-label">Area in m² <span class="et">*</span></label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group">
                                        <input id="Area" name="area" placeholder="Ex: 5000" class="form-control"
                                            required="true" value="{{old('area')}}" type="text">
                                    </div>
                                </div>

                            </div>


                            <div class="form-group" id="number of room">
                                <label class="col-md-4 control-label">number of room <span class="et">*</span></label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group">
                                        <input name="number_r" id="number_r" placeholder="Ex: 3" class="form-control"
                                            required="true" value="{{old('number_r')}}" type="text">
                                    </div>
                                </div>
                            </div>



                            <div class="form-group" id="Floor number" hidden="true">
                                <label class="col-md-4 control-label">Floor number <span class="et">*</span></label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group">
                                        <input name="floor_n" id="floor_n" placeholder="EX: 0" class="form-control"
                                            required="true" value="{{old('floor_n')}}" type="text">
                                    </div>
                                </div>


                            </div>


                            <div class="form-group">
                                <label class="col-md-4 control-label">Title<span class="et">*</span></label>
                                <div class="col-md-8 inputGroupContainer">
                                    <div class="input-group">
                                        <input id="Title" name="title" placeholder="Ex: Small house"
                                            class="form-control" required="true" value="{{old('title')}}" type="text">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Description <span class="et">*
                                        @if($errors->get('descr'))
                                        @foreach($errors->get('descr') as $message)
                                        <p>{{$message}}</p>
                                        @endforeach
                                        @endif</span>

                                </label>
                                <textarea class="form-control rounded-0" id="exampleFormControlTextarea1" rows="10"
                                    required="true" name="descr" value="{{old('descr')}}"></textarea>

                            </div>


                    <div class="container mt-10">
                        <h2>Chose Your Pictures <a href=""></a></h2>
                            @if(session()->has('success'))
                                <div class="alert alert-success">
                                    {{ session()->get('success') }}
                                </div>
                            @endif

                            
                                <input type="file" name="files[]" multiple class="form-control" accept="image/*">
                                @if ($errors->has('files'))
                                    @foreach ($errors->get('files') as $error)
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $error }}</strong>
                                    </span>
                                    @endforeach
                                @endif

                            
                    </div>

    </fieldset>
                        <!-- <div class="form-group">
        <button type="submit" class="btn btn-outline-success my-2 my-sm-0">Save</button>
      </div> -->
       <div class="row h-100 align-items-center">
                            <div class="col-12 text-center">

                                <a href="#" class="btn btn-lg btn-success btR" data-toggle="modal" data-target="#basicModal">Submit Property</a>
                            </div>
                        </div> 


                        <div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title" id="myModalLabel">verification</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <h3>If you are checking the information, click Save</h3>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default"
                                            data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        

                    </td>
                </tr>
            </tbody>

        </table>
    </form>

</div>






<!-- Footer -->
<footer class="footer ">

    <div class="header-footer">
        <div class="container">

            <!-- Grid row-->
            <div class="row py-4 d-flex align-items-center">

                <!-- Grid column -->
                <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                    <h4 class="mb-0 wh">FOLLOW US ON SOCIAL MEDIA!</h6>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-6 col-lg-7 text-center text-md-right">

                    <!-- Facebook -->
                    <a class="fb-ic">
                        <i class="fab fa-facebook-f white-text mr-4  fa-2x wh"> </i>
                    </a>
                    <!-- Twitter -->
                    <a class="tw-ic">
                        <i class="fab fa-twitter white-text mr-4 fa-2x wh"> </i>
                    </a>
                    <!-- Google +-->
                    <a class="gplus-ic">
                        <i class="fab fa-google-plus-g white-text fa-2x mr-4 wh"> </i>
                    </a>
                    <!--Linkedin -->
                    <a class="li-ic">
                        <i class="fab fa-linkedin-in white-text fa-2x mr-4 wh"> </i>
                    </a>
                    <!--Instagram-->
                    <a class="ins-ic">
                        <i class="fab fa-instagram white-text fa-2x wh"> </i>
                    </a>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row-->

        </div>
    </div>

    <!-- Footer Links -->
    <div class="container text-center text-md-left mt-5">

        <!-- Grid row -->
        <div class="row mt-3">

            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

                <!-- Content -->
                <h6 class="text-uppercase font-weight-bold  wh">About Us</h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto hr" style="width: 60px;">
                <p class="wh">Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit
                    amet,
                    consectetur
                    adipisicing elit.</p>

            </div>
            <!-- Grid column -->


            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

                <!-- Links -->
                <h6 class="text-uppercase font-weight-bold  wh">Useful Links</h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto hr" style="width: 60px;">
                <p class="wh">
                    <a class="a" href="#!">Home</a>
                </p>
                <p class="wh">
                    <a class="a" href="#!">Properties</a>
                </p>
                <p class=" wh">
                    <a class="a" href="#!">Login</a>
                </p>
                <p class="wh">
                    <a class="a" href="#!">Register</a>
                </p>


            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

                <!-- Links -->
                <h6 class="text-uppercase font-weight-bold  wh">Contact</h6>
                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto hr" style="width: 60px;">
                <p class="wh">
                    <i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
                <p class="wh">
                    <i class="fas fa-envelope mr-3"></i> info@example.com</p>
                <p class="wh">
                    <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                <p class="wh">
                    <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3  wh">© 2020 Copyright
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->
<a href="#" id="toTopBtn" class="cd-top text-replace js-cd-top cd-top--is-visible cd-top--fade-out" data-abc="true"></a>
@endsection
