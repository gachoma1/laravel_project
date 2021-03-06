@extends('layouts.admin')



@section('content')

    <h1>Edit User</h1>


    @include('includes.form_errors')


    <div class="col-sm-3">

        <img src="{{$user->photo ? $user->photo->path : 'http://placehold.it/400x400'}}" alt="" class="img-responsive img-rounded">

    </div>



    <div class="col-sm-9">

        {!! Form::model($user, ['method'=>'PATCH', 'action'=>['AdminUsersController@update', $user->id], 'files'=>true]) !!}

        {{ csrf_field() }}

        <div class="form-group">

            {!! Form::label('name', 'Name:') !!}

            {!! Form::text('name', null, ['class'=>'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::label('photo_id', 'User Photo:') !!}

            {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::label('email', 'Email:') !!}

            {!! Form::email('email', null, ['class'=>'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::label('role_id', 'Role:') !!}

            {!! Form::select('role_id', ['' => 'Choose Option'] + $roles , null, ['class'=>'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::label('account_status', 'Status:') !!}

            {!! Form::select('account_status', array(1 =>'Active', 2 => 'Inactive'), null , ['class'=>'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::label('password', 'Password:') !!}

            {!! Form::password('password', ['class'=>'form-control']) !!}

        </div>

        {{--<div class="form-group">--}}

            {{--{!! Form::submit('Update Info', ['class'=>'btn btn-primary']) !!}--}}

        {{--</div>--}}



        <div class="form-group">

        {!! Form::submit('UPDATE INFO', ['class'=>'btn btn-primary col-sm-5']) !!}

        </div>

        {!! Form::close() !!}



        <div class="form-group">

        {!! Form::open(['method'=>'DELETE', 'action'=>['AdminUsersController@destroy', $user->id]]) !!}

        {!! Form::submit('DELETE USER', ['class'=>'btn btn-danger col-sm-5 pull-right']) !!}

        {!! Form::close() !!}

        </div>

    </div>







        {{--{!! Form::open(['method'=>'DELETE', 'action'=>['AdminUsersController@destroy', $user->id]]) !!}--}}

            {{--<div class="form-group">--}}

            {{--{!! Form::submit('DELETE USER', ['class'=>'btn btn-danger']) !!}--}}

            {{--</div>--}}

        {{--{!! Form::close() !!}--}}

    </div>


@endsection