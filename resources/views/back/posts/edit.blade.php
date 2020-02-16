@extends('back.layouts.master')
<!-- Main Sidebar Container -->
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <form method="POST"  action="{{route('posts.update',$post->id)}}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" name="title" value="{{$post->title}}" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Category</label>
                <select class="form-control" name="category" >

                    @foreach ($categories as $category)

                        <option
                            @if($post->category_id == $category->id) selected @endif
                            value="{{$category->id}}">{{$category->category}}</option>
                    @endforeach
                </select>
                <div class="form-group">
                    <label for="">Image</label>
                    <input type="file" name="img" class="form-control" >
                    <img class="img-fluid w-25 my-2" src="{{asset($post->img)}}" alt="">
                </div>
                <div class="form-group">
                    <label for="">Slider </label>
                    <input type="radio" name="slide" value="{{$post->slide}}" @if($post->slide == 1) checked @endif >
                </div>


                <div class="form-group">
                    <label for="">Content</label>
                    <textarea class="form-control" name="content"  id="summernote" cols="30" rows="10">
                        {{$post->content}}
                    </textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Send</button>
                </div>
            </div>
        </form>
    </div>
    <!-- /.content-wrapper -->

@endsection

