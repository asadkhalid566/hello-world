

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
                                    <div class="serach_field_2">
                                        <div class="search_inner">
                                            <form Active="#">
                                                <div class="search_field">
                                                    <input type="text" placeholder="Search content here...">
                                                </div>
                                                <button type="submit"> <i class="ti-search"></i> </button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="add_button ml-10">
                                        <a href="#" data-toggle="modal" data-target="#addcategory" class="btn_1">Add New</a>
                                    </div>
                                </div>
                            </div>

                            <div class="QA_table mb_30">
                                <!-- table-responsive -->
                                <div class="card-body table-responsive">
                                    <table id="example1" class="table lms_table_active ">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Diary</th>

                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($user->diarys as $diary)
                                        <tr>
                                            <td>{{$diary->id}}</td>
                                            <td>{{$diary->name}}</td>

                                            <td>{!!  substr(strip_tags($diary->diary), 0, 150) !!}
                                            </td>


                                            <td>

                                                <a href="{{url('viewdiary/'.$diary->id)}}" class="badge badge-pill btn-success px-3 py-2">View</a>
                                            </td>
                                        </tr>
                                        @endforeach





                                    </tbody>

                                </table>
                                {{-- {!! $diarys->links('pagination::bootstrap-4') !!} --}}
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
