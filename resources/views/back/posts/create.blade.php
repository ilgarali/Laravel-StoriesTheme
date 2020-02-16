@extends('back.layouts.master')
<!-- Main Sidebar Container -->
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <form method="POST"  action="{{route('posts.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" name="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Category</label>
                <select class="form-control" name="category" >
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->category}}</option>
                    @endforeach
                </select>
                <div class="form-group">
                    <label for="">Image</label>
                    <input type="file" name="img" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="">Slider </label>
                    <input type="radio" name="slide" value="1" >
                </div>


                <div class="form-group">
                    <label for="">Content</label>
                    <textarea class="form-control" name="content"  id="summernote" cols="30" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Send</button>
                </div>
            </div>
        </form>
    </div>
    <!-- /.content-wrapper -->

@endsection

