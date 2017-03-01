@extends('main')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Content edit</div>
        <div class="panel-body">


            {!! Form::model( $article ,array('class' => 'sdf', 'method' => 'PATCH', 'url' => '/articles/'.$article->id, 'files' => true)) !!}

                @include('form.article', ['nameSubmit' => 'Edit Article'])

            {!! Form::close() !!}

            @include('errors.list')
        </div>
    </div>
@endsection