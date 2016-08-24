@extends('layouts.admin')



@section('content')


    <h1>CREATE POST</h1>


    @include('includes.form_errors')


    {!! Form::open(['method'=>'POST', 'action'=>'AdminPostsController@store', 'files'=>true]) !!}

        {{ csrf_field() }}

    <div class="form-group">

        {!! Form::label('title', 'Title:') !!}

        {!! Form::text('title', null, ['class'=>'form-control']) !!}

    </div>

    <div class="form-group">

        {!! Form::label('category_id', 'Category:') !!}

        {!! Form::select('category_id', array(1=>'Category 1', 2=>'Category 2') , null, ['class'=>'form-control']) !!}

    </div>

    <div class="form-group">

        {!! Form::label('photo_id', 'Post Photo:') !!}

        {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}

    </div>

    <div class="form-group">

        {!! Form::label('body', 'Content:') !!}

        {!! Form::textarea('body', null, ['class'=>'form-control']) !!}

    </div>

        <div class="form-group">

        {!! Form::submit('Create Post', ['class'=>'btn btn-primary']) !!}

    </div>

    {!! Form::close() !!}


@endsection