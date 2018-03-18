@extends('layouts.app')

@section('content')
    <div class="card">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Permissions</th>
                <th>Edit</th>
                <th>Trash</th>
                {{--Soft Deletes--}}
            </tr>
            </thead>

            <tbody>
            @foreach($users as $user)
                <tr>
                    <td><img src="#{{--{{asset($user->profile->avatar)}}--}}" alt="{{$user->name}}" width="60px" height="60px"></td>
                    <td>{{$user->name}}</td>
                    <td>Permissions</td>
                    <td>
                        <a href="#" class="btn btn-xs btn-info">Edit</a>
                    </td>
                    <td>
                        <a href="#" class="btn btn-xs btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@stop