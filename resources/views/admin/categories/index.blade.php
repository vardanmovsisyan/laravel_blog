@extends('layouts.app')

@section('content')
    <div class="card">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Category name</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>
                        {{$category->name}}
                    </td>
                    <td>
                        <a href="{{route('category.edit', ['id'=>$category->id])}}" class="btn btn-xs btn-info">
                            Edit
                        </a>
                    </td>
                    <td>
                        <a href="{{route('category.delete', ['id'=>$category->id])}}" class="btn btn-xs btn-danger">
                            Delete
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@stop