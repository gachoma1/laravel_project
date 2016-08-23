@extends('layouts.admin')



@section('content')

    <h1>Users</h1>

    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th>USER ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>ROLE</th>
            <th>STATUS</th>
            <th>REGISTRATION DATE</th>
        </tr>
        </thead>

        <tbody>

        @if($users)

        @foreach($users as $user)

        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->role->name}}</td>
            <td>{{$user->account_status == 1 ? 'Active' : 'Inactive'}}</td>
            <td>{{$user->created_at->diffForHumans()}}</td>
        </tr>

        @endforeach

        @endif

        </tbody>
    </table>




@endsection