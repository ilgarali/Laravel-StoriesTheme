@extends('back.layouts.master')
<!-- Main Sidebar Container -->
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 my-2">
                <a href="{{route('posts.create')}}" class="btn btn-block btn-outline-info">Add New Post</a>
            </div>
            @if(session('post'))

                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="alert alert-success text-center">
                            {{session('post')}}
                        </div>
                    </div>
                </div>

                @endif

        </div>
        <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
            <thead>
            <tr role="row">
                <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Image</th>
                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" >Title</th>
                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" >Content</th>
                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Category</th>
                <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" >Action</th></tr>
            </thead>
            <tbody>

            @foreach($posts as $post)

            <tr role="row" class="odd">
                <td class="sorting_1"><img src="{{asset($post->img)}}" class="img-fluid w-75 rounded-bottom" alt=""></td>
                <td>{{$post->title}}0</td>
                <td>{{\Illuminate\Support\Str::words($post->content,25)}}</td>
                <td>{{$post->category->category}}</td>
                <td>
                    <a href="{{route('posts.edit',$post->id)}}" class="btn btn-primary">Edit</a>
                    <form action="{{route('posts.destroy',$post->id)}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button  class="btn btn-danger">Delete</button>
                    </form>

                </td>
            </tr>

                @endforeach
            </tbody>

        </table>
    </div>
    <!-- /.content-wrapper -->

@endsection
