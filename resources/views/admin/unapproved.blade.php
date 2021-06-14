

@extends('layouts.admins')

@section('content')
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">

        <strong>{{ $message }}</strong>

</div>
@endif
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
                                <table class="table lms_table_active ">
                                    <thead>
                                        <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Email</th>
                                                                                      <th scope="col">Role</th>

                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($users as $user)
                                        <tr>
                                            <td>{{$user->id}}</td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            {{-- <td>{{optional($user->role)->role_name}}</td> --}}
                                            <td>0</td>
                                            <td><a href="{{url('status/'.$user->id)}}" class="status_btn">@if($user->status==0)Pending  @else  Approve @endif</a></td>
                                            <td>
                                            <td>

                                                <a href="#" class="badge badge-pill btn-danger px-3 py-2 editbtn" >Roles</a>
                                                    <a href="{{url('record_delete/'.$user->id)}}" class="badge badge-pill btn-danger px-3 py-2 editbtn" >Delete</a>

                                            </td>
                                        </tr>
                                        @endforeach





                                    </tbody>
                                </table>
                                {{-- {!! $users->links('pagination::bootstrap-4') !!} --}}
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


@push('script')
<script type="text/javascript">
    $(document).ready(function() {

        $('.editbtn').on('click', function() {

            $('#exampleModal').modal('show');
            $tr=$(this).closest('tr');
            var data=$tr.children("td").map(function(){

                return $(this).text();
            }).get();
            console.log(data);

            $('#id').val(data[0]);
            $('#name').val(data[1]);
            $('#email').val(data[2]);





            $('#exampleModal').on('submit', function(e) {

    e.preventDefault();
     let id=$('#id').val();

     let roles=$('#roles').val();


        class1=$('#class').val();





    $.ajax({
        type: 'PUT',
        url: "/record/"+id,
        data: {
            roles:roles,class1:class1,

            _token: '{{csrf_token()}}' ,
        },
        success: function(data) {
            console.log(data)
            $("#exampleModal").modal('hide');
            alert("data saved");
            window.location.href = "http://127.0.0.1:8000/new#";

        }
    });
});




            $(".close").click(function(){
        $("#exampleModal").modal('hide');
    });


        });
    });
    </script>
@endpush

@endsection()



    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-body">
                    <div class="main">


                            <div class="containers">


                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <form id="signup-form" class="signup-form">
                                       <!-- {{csrf_field()}} -->
                                       <!-- <input type="hidden" id="_token" value="{{ csrf_token() }}"> -->
                                       {{ method_field('PUT') }}

                                      <input type="hidden" name="id" id="id">
                                        <h2 class="form-title">Edit Teacher</h2>
                                        <div class="mb-3 row">
                                            <label for="inputPassword" class="col-sm-2 col-form-label">Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="name" name="name" readonly
                                                   >
                                            </div>
                                        </div>


                                        <div class="mb-3 row">
                                            <label for="inputPassword" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="email" name="email"
                                                readonly  >
                                            </div>
                                        </div>


                                        <div class="mb-3 row">
                                            <label for="inputPassword" class="col-sm-2 col-form-label">Role</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="roles" id="roles">
                                                    <option>-- Select Role--</option>
                                                    @foreach($roles as $role)
                                                    <option value="{{$role->id}}">{{$role->role_name}}</option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>


                                        <div class="mb-3 row">
                                            <label for="inputPassword" class="col-sm-2 col-form-label">Class</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="class" id="class">
                                                    <option>-- Select Class--</option>
                                                    @foreach($class as $class)
                                                    <option value="{{$class->id}}">{{$class->classname}}</option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <input type="submit" name="submit" id="submit" class="form-submit"
                                                value="Sign up" />
                                        </div>


                                    </form>


                            </div>


                    </div>
                </div>

            </div>
        </div>
    </div>



