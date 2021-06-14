

@extends('layouts.admins')

@section('content')

<div class="main_content_iner ">
    <div class="container-fluid p-0">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="white_card card_height_100 mb_30">
                    <div class="white_card_header">
                        <div class="box_header m-0">
                            <div class="main-title">
                                <h3 class="m-0">Data table</h3>
                            </div>
                        </div>
                    </div>
                    <div class="white_card_body">
                        <div class="QA_section">
                            <div class="white_box_tittle list_header">
                                <h4>Table</h4>
                                <div class="box_right d-flex lms_block">


                                </div>
                            </div>
                            <form method="POST" action="{{url('/gprofile')}}/{{$profile->id}}" enctype='multipart/form-data'>
                                @csrf
                                <div class="form-row">

                                    <div class="form-group col-md-6">
                                        <label for="inputZip">Name</label>
                                        <input type="text" class="form-control" id="inputZip" name="name" value="{{$profile->name}}">
                                      </div>
                                  <div class="form-group col-md-6">
                                    <label for="inputEmail4">Email</label>
                                    <input type="email" class="form-control" name="email" id="inputEmail4" value="{{$profile->email}}">
                                  </div>

                                </div>
                                <div class="row">
                                <div class="form-group col-md-6">
                                  <label for="inputAddress">Address</label>
                                  <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="address" value="{{$profile->address}}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Password</label>
                                    <input type="password" class="form-control" id="inputPassword4"  name="password" value="{{$profile->password}}">
                                  </div>
                                </div>

                                <div class="form-row">
                                  <div class="form-group col-md-6">
                                    <label for="inputCity">City</label>
                                    <input type="text" class="form-control" id="inputCity" name="city" value="{{$profile->city}}">
                                  </div>

                                  <div class="form-group col-md-6">
                                    <label for="inputZip">phone</label>
                                    <input type="text" class="form-control" id="inputZip" name="phone" value="{{$profile->phone}}">
                                  </div>
                                </div>





                                <div class="form-group  col-md-12">

                                    <input type="file" class="custom-file-input" name="image" >
                                    <label class="custom-file-label" >Choose file...</label>
                                  </div>



                            </div>
                                <div class="form-group">
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                      Check me out
                                    </label>
                                  </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Sign in</button>
                              </form>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">

            </div>
        </div>
    </div>
</div>









@endsection()

