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

                            </div>
<form action="{{url('editdiary/'.$diary->id)}}"  method="post">
    @csrf
                            <div class="row">

                            </div>
                            <br>
                            <div class="form-group">
                                <label><strong>Description :</strong></label>
                                <textarea class="summernote" name="description">{{$diary->diary}}</textarea>
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

</script>
@endpush


