@extends('layouts.app')

@section('content')
    <div class="card">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Image</th>
                <th>Title</th>
                <th>Edit</th>
                <th>Restore</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @if($posts->count()>0)
                @foreach($posts as $post)
                    <tr>
                    <td><img src="{{$post->featured}}" alt="{{$post->title}}" width="50px" height="50px"></td>
                    <td>{{$post->title}}</td>
                    <td>Edit</td>
                    <td>
                        <a href="{{route('post.restore', ['id'=>$post->id])}}" class="btn btn-xs btn-success">Restore</a>
                    </td>
                    <td>
                        <a href="{{route('post.kill', ['id'=>$post->id])}}" class="btn btn-xs btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            @else
                <tr>
                    <th colspan="5" class="text-center">No trashed posts</th>
                </tr>
            @endif
            </tbody>
        </table>
    </div>
@stop