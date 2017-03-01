@extends('main')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Content Add</div>
        <div class="panel-body">


            {!! Form::open(array('class' => '', 'url' => 'articles', 'files' => true)) !!}

                @include('form.article', ['nameSubmit' => 'Add Article'])

            {!! Form::close() !!}

            @include('errors.list')
        </div>
    </div>
@endsection