@extends('layouts.admin')



@section('content')

    <h1>Create User</h1>


    @include('includes.form_errors')



    {!! Form::open(['method'=>'POST', 'action'=>'AdminUsersController@store', 'files'=>true]) !!}

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

            {!! Form::select('account_status', array(1 =>'Active', 0 => 'Inactive'), 0 , ['class'=>'form-control']) !!}

        </div>

        <div class="form-group">

            {!! Form::label('password', 'Password:') !!}

            {!! Form::password('password', ['class'=>'form-control']) !!}

        </div>

        <div class="form-group">

        {!! Form::submit('Create User', ['class'=>'btn btn-primary']) !!}

        </div>

    {!! Form::close() !!}


@endsection