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

                            </div>
<form action="{{route('summernote')}}"  method="post">
    @csrf
                            <div class="row">


                                <div class="col-lg-6">
                                    <label for="class">Class</label>

                                    <select name="class" class="custom-select" id="class">
                                        <option selected="">Select Class</option>
                                        @foreach ($class as $class)
                                        <option value="{{$class->id}}">{{$class->classname}}</option>

                                        @endforeach
                                    </select>

                                </div>
                                <div class="col-lg-6">

                                    <input type="button" id="select_all" name="select_all" value="Select All">
                                    <label for="students">Student</label>
                                    <select name="student[]"
                               class="custom-select"  multiple="multiple"   id="inputGroupSelect01">
                                        {{-- <option selected="">Select Students</option> --}}

                                    </select>

                                </div>


                            </div>
                            <br>
                            <div class="form-group">
                                <label><strong>Description :</strong></label>
                                <textarea class="summernote" name="description"></textarea>
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-success btn-sm">Save</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</div>






@endsection()
@push('script')
<script type="text/javascript">
    $(document).ready(function () {
        $('.summernote').summernote();
    });

    $("select").height("45px");

    $('#select_all').click(function() {
    $('#inputGroupSelect01 option').prop('selected', true);
});



$('#class').change(function(){


  var value = $(this).val();

  console.log(value)

  var _token = $('input[name="_token"]').val();
  $.ajax({
   url:"{{ route('dynamicdependent') }}",
   method:"POST",
   data:{value:value, _token:_token},
   success:function(result)
   {
    $('#inputGroupSelect01').html(result);
   }

  })

});

</script>
@endpush


</div>

<style>
    select option{
  font-size: 20px;
}
</style>
