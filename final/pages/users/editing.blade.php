@extends('layout.templateuser')
@section('content')
<div class="user__right">
    <h3 class="text-center">EDIT IMAGES</h3>
    <label for="">Images</label>
    <img src="upload/avatar/{{Auth::user()->Image}}" alt="">

    <form action="editimg.html" method="POST" enctype="multipart/form-data">
        <br>
    <label for="">Select Images</label>  
    <input type="hidden" name="_token" value="{{csrf_token()}}" />
        <input type="file" name="Image" class="form-control">
        <button type="submit" class="btn mt-3 btn-danger">Edit</button>
    </form>
</div>  
@endsection
{{-- @section('script')
    <script>    
        $(document).ready(function(){
        $('.fix__content').removeClass('content__news--flex');
        });
    </script>
@endsection --}}