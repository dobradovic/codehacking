@extends('layouts.admin')

@section('content')

  <h1>Create Post</h1>

    {!! Form::open(['method' => 'POST', 'action'=>'AdminPostsController@store', 'files'=> true, 'class' => 'form-horizontal']) !!}

        <div class="form-group">
            {!! Form::label("title", 'Title:') !!}
            {!! Form::text("title", null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label("category_id", 'Category:') !!}
            {!! Form::select("category_id", ['' => 'Choose Categories'] + $categories, null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label("photo_id", 'Photo:') !!}
            {!! Form::file("photo_id", ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label("body", 'Description:') !!}
            {!! Form::textarea("body", null, ['class' => 'form-control', 'rows' => 3]) !!}
        </div>

        {!! Form::submit('Create Post', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}

    @include('includes.form_error')

@stop
