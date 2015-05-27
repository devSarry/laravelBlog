@extends('master', ['title' => 'Post Article',
                    'headerImage' => 'img/create-bg.jpg',
                    'heading' => 'Create an Article'])

{{--@section('title', 'Post Article') @stop

@section('headerImage'){{url('img/create-bg.jpg')}}@stop

@section('heading', 'Create an Article') @stop--}}

    @section('content')

        <h1 class="page-heading">Write an Article</h1>

        {!! Form::open(['url' => 'articles']) !!}

           @include('partials.form', ['submitButtonText' => 'Add Article'])

        {!! Form::close() !!}

        @include('errors.list')


    @stop