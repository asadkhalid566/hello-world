

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

                            <div class="container">
                                <div class="main-body">

                                      <!-- Breadcrumb -->
                                      <nav aria-label="breadcrumb" class="main-breadcrumb">
                                        <ol class="breadcrumb">
                                          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                          <li class="breadcrumb-item"><a href="javascript:void(0)">User</a></li>
                                          <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                                        </ol>
                                      </nav>
                                      <!-- /Breadcrumb -->

                                      <div class="row gutters-sm">
                                        <div class="col-md-4 mb-3">
                                          <div class="card">
                                            <div class="card-body">
                                              <div class="d-flex flex-column align-items-center text-center">
                                                <img src="{{asset('/image')}}/{{$profile->image}}" alt="Admin" class="rounded-circle" width="150">
                                                <div class="mt-3">
                                                  <h4>{{$profile->name}}</h4>


                                                  <a href="profile/{{$profile->id}}" class="btn btn-outline-primary">Edit</a>
                                                </div>
                                              </div>
                                            </div>
                                          </div>

                                        </div>
                                        <div class="col-md-8">
                                          <div class="card mb-3">
                                            <div class="card-body">
                                              <div class="row">
                                                <div class="col-sm-3">
                                                  <h6 class="mb-0">Full Name</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                {{$profile->name}}
                                                </div>
                                              </div>
                                              <hr>
                                              <div class="row">
                                                <div class="col-sm-3">
                                                  <h6 class="mb-0">Email</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    {{$profile->email}}
                                                </div>
                                              </div>
                                              <hr>
                                              <div class="row">
                                                <div class="col-sm-3">
                                                  <h6 class="mb-0">Phone</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    {{$profile->phone}}
                                                </div>
                                              </div>
                                              <hr>

                                              <div class="row">
                                                <div class="col-sm-3">
                                                  <h6 class="mb-0">city</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    {{$profile->city}}
                                                </div>
                                              </div>
                                              <hr>

                                              <hr>
                                              <div class="row">
                                                <div class="col-sm-3">
                                                  <h6 class="mb-0">Address</h6>
                                                </div>
                                                <div class="col-sm-9 text-secondary">
                                                    {{$profile->address}}
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
            </div>
            <div class="col-12">

            </div>
        </div>
    </div>
</div>









@endsection()

