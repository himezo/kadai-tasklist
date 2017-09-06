@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->

    {!! Form::model($task, ['route' => 'tasks.store']) !!}
    
        {!! Form::label('content', 'タスク：') !!}
        {!! Form::text('content') !!}
        
        {!! Form::submit('投稿') !!}
    
    {!! Form::close() !!}

@endsection