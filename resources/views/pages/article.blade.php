@extends('main')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Content <a href="/articles/create">Create</a></div>
        <div class="panel-body">

            @if (!empty($articles))
            <ul class="media-list">
                @foreach($articles as $rows)
                    <li class="media">
                        <a class="pull-left" href="/articles/{{$rows->id}}">
                            <img class="media-object" src="/upload/image/{{$rows->image}}" alt="" width="50%">
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading">{{$rows->title}}</h4>
                            <a href="/articles/{{$rows->id}}/edit">Edit</a>
                            {!! Form::open(array('class' => '', 'url' => '/articles/'.$rows->id, 'method' => 'DELETE', 'files' => false)) !!}
                                {{ Form::hidden('id', $rows->id) }}
                                <button type="submit" class="btn btn-default">Del</button>
                            {!! Form::close() !!}

                        </div>
                    </li>
                @endforeach
            </ul>
            @endif
            {{--{{dd($item_article)}}--}}
            @if (!empty($item_article))
                <div class="text-center">
                    <img src="/upload/image/{{$item_article->image}}" alt="">
                </div>
                    <h1>{{$item_article->title}} <small>Вторичный текст</small></h1>
                    <p>{{$item_article->description}}</p>

            @endif

        </div>
    </div>
@endsection