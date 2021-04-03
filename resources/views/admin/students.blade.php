

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
                                <table class="table lms_table_active ">
                                    <thead>
                                        <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Address</th>
                                            <th scope="col">Phone</th>
                                            <th scope="col">Role</th>

                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($std as $std)
                                        <tr>
                                            <td>{{$std->id}}</td>
                                            <td>{{$std->name}}</td>
                                            <td>{{$std->email}}</td>
                                            <td>{{$std->address}}</td>
                                            <td>{{$std->mobile}}</td>
                                            <td>{{$std->role_as}}</td>
                                            <td><a href="#" class="status_btn">Active</a></td>
                                            <td>
                                                <!-- <li class="nav-item"> <a href="" data-toggle="modal"
                                                        data-target="#registerModal" class="nav-link">
                                                        Register
                                                    </a></li> -->

                                                    <a href="#" class="badge badge-pill btn-danger px-3 py-2 editbtn" >Edit</a>
                                                <a href="" class="badge badge-pill btn-danger px-3 py-2">Delete</a>
                                            </td>
                                        </tr>
                                        @endforeach





                                    </tbody>
                                </table>
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
                $('#address').val(data[3]);
                $('#password').val(data[4]);
                $('#mobile').val(data[5]);




                $('#exampleModal').on('submit', function(e) {

        e.preventDefault();
         let id=$('#id').val();
         let name=$('#name').val();
         let email=$('#email').val();
         let address=$('#address').val();
         let mobile=$('#mobile').val();
         let password=$('#password').val();
         console.log(name);


        $.ajax({
            type: 'PUT',
            url: "/studentupdate/"+id,
            data: {
                name:name,
                email:email,
                address:address,
                mobile:mobile,
                password:password,
                _token: '{{csrf_token()}}' ,
            },
            success: function(data) {
                console.log(data)
                $("#exampleModal").modal('hide')
                alert("data saved");
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
                                                <input type="text" class="form-control" id="name" name="name"
                                                   >
                                            </div>
                                        </div>


                                        <div class="mb-3 row">
                                            <label for="inputPassword" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="email" name="email"
                                                  >
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="inputPassword" class="col-sm-2 col-form-label">Address</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="address" name="address"
                                                  >
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="inputPassword" class="col-sm-2 col-form-label">Password </label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" id="password" name="password"
                                                 >
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="inputPassword" class="col-sm-2 col-form-label">Mobile</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="mobile" name="mobile"
                                                   >
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="inputPassword" class="col-sm-2 col-form-label">Role</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="roles" id="roles">
                                                    <option>-- Select Role--</option>
                                                    <option value="admin">Admin</option>
                                                    <option value="student">Student</option>
                                                    <option value="teacher">Teacher</option>
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
