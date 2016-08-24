@extends('layouts.admin')



@section('content')

    <h1>Users</h1>

    @if(Session::has('user_deleted'))

        <h3 class="bg-danger">{{session('user_deleted')}}</h3>

    @endif

    @if(Session::has('user_created'))

        <h3 class="bg-success">{{session('user_created')}}</h3>

    @endif

    @if(Session::has('user_updated'))

        <h3 class="bg-primary">{{session('user_updated')}}</h3>

    @endif

    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th>USER ID</th>
            <th>USER PHOTO</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>ROLE</th>
            <th>STATUS</th>
            <th>REGISTERED</th>
            <th>UPDATED</th>
        </tr>
        </thead>

        <tbody>

        @if($users)

        @foreach($users as $user)

        <tr>
            <td>{{$user->id}}</td>
            <td><img height="50" src="{{$user->photo ? $user->photo->path : 'http://placehold.it/400x400'}}" alt=""></td>
            <td><a href="{{route('admin.users.edit', $user->id)}}">{{$user->name}}</a></td>
            <td>{{$user->email}}</td>
            <td>{{$user->role->name}}</td>
            <td>{{$user->account_status == 1 ? 'Active' : 'Inactive'}}</td>
            <td>{{$user->created_at->diffForHumans()}}</td>
            <td>{{$user->updated_at->diffForHumans()}}</td>
        </tr>

        @endforeach

        @endif

        </tbody>
    </table>




@endsection