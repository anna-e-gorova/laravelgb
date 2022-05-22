@extends('layouts.main')
@section('title') Список новостей @parent @stop
@section('content')
    <div>
        {{ $news->title }}
        <br />
        <img src="{{ $news->image }}" style="width:200px;"><br>

        <br>
        <p><strong>Автор:</strong> {{ $news->author }}</p>
        <p>{!! $news->description !!}</p>
    </div>
@endsection
