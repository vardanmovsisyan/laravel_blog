@extends('layouts.app')

@section('content')
    <div class="card">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Tag name</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($tags as $tag)
                <tr>
                    <td>
                        {{$tag->tag}}
                    </td>
                    <td>
                        <a href="{{route('tag.edit', ['id'=>$tag->id])}}" class="btn btn-xs btn-info">
                            Edit
                        </a>
                    </td>
                    <td>
                        <a href="{{route('tag.delete', ['id'=>$tag->id])}}" class="btn btn-xs btn-danger">
                            Delete
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@stop