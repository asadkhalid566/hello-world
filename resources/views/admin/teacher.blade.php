

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
                                        @foreach($teachers as $teacher)
                                        <tr>
                                            <td>{{$teacher->id}}</td>
                                            <td>{{$teacher->name}}</td>
                                            <td>{{$teacher->email}}</td>
                                            <td>{{$teacher->address}}</td>
                                            <td>{{$teacher->mobile}}</td>
                                            <td>{{$teacher->role->role_name}}</td>
                                            <td><a href="{{url('status/'.$teacher->id)}}" class="status_btn">@if($teacher->status==0)Pending  @else  Approve @endif</a></td>

                                            <td>
                                                <!-- <li class="nav-item"> <a href="" data-toggle="modal"
                                                        data-target="#registerModal" class="nav-link">
                                                        Register
                                                    </a></li> -->

                                                    <a href="#" class="badge badge-pill btn-danger px-3 py-2 editbtn" >Edit</a>
                                                <a href="{{url('teacher_delete/'.$teacher->id)}}" class="badge badge-pill btn-danger px-3 py-2">Delete</a>
                                            </td>
                                        </tr>
                                        @endforeach





                                    </tbody>
                                </table>
                                {!! $teachers->links('pagination::bootstrap-4') !!}
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
            url: "/teacher/"+id,
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

