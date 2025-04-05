@extends('layouts.masteradmin')
@section('body')
<div class="page-content">
<div class="row">
    <div class="col-12">
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        
        <form method="post" enctype="multipart/form-data" action="{{url('admin/categories/'.$category->id)}}" id="validation">
            @method('PUT')
        
        @csrf
            <div class="card">
               
                <center><h2>{{$page_title}}<h2></center>
                         
                <div class="card-body">
                    <div class="faq">
                        <div class="mb-3 row">
                            <label for="question-0" class="col-md-2 col-form-label">Categories Name<span class="text-danger">*</span></label>
                            <div class="col-md-10">
                                <input class="form-control" type="text" findex="1"  name="name" value="{{isset($category)?$category->name:''}}" placeholder="Enter Categories Name" id="name-0" required>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="question-0" class="col-md-2 col-form-label">Slug<span class="text-danger">*</span></label>
                            <div class="col-md-10">
                                <input class="form-control" type="text"  name="slug" value="{{isset($category)?$category->slug:''}}" placeholder="Enter slug Name" id="name-0">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="answer-0" class="col-md-2 col-form-label">Category Image<span class="text-danger">*</span></label>
                            <div class="col-md-10">
                                <input class="form-control" type="file"  name="image" placeholder="Categories Logo" id="image-0" >
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="answer-0" class="col-md-2 col-form-label">Image Code<span class="text-danger">*</span></label>
                            <div class="col-md-10">
                                <input class="form-control" type="text"  name="image_code" value="{{isset($category)?$category->image_code:''}}" placeholder="image code" id="image-0" >
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label class="col-md-2 col-form-label">Status</label>
                            <div class="col-md-10">
                                <select class="form-select" name="status">
                                    <option @if(isset($category) && $category->status=='1') selected="selected" @endif value="1">Active</option>
                                    <option @if(isset($category) && $category->status=='0') selected="selected" @endif value="0">Inactive</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="append-faq"></div> 
                    <div class="mb-3 row">
                        <label for="example-tel-input" class="col-md-2 col-form-label"></label>
                        <div class="col-md-10">
                           
                            <button type="sumbit" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </div>
                
            </div>
        </form>
    </div> <!-- end col -->
</div>
</div>

@endsection

@push('footer-section-code')
<script>
    var id = $('#gid').val();
    if(id!='' && id!= null)
    {
        $('#image_upload').hide();
    }
    else{

        $('#image_upload').show();
    }

function hideimage(){
    $('#image_upload').show();
    $('#image_hide').hide();
}
    </script>

    {{--  For appending Section Faq --}}
<script>

        $(document).ready(function(){
        jQuery("#form-validation").validate({
        errorElement:'row',
        rules: {
        // RULES //
        },
        messages: {
        // MESSAGES //
        }
         });
        });
        </script>


@endpush

