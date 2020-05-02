@extends('layouts.master')

@section('title', 'Web Dev Forum - ' . $topic->forum->name . ' - ' . $topic->title)

@section('content')
    <h1>
        <a href="{{ action('ForumController@index')}}">Web Dev Forum<a> - 
        <a href="{{ action('ForumController@show', $topic->forum->id)}}">{{ $topic->forum->name }}</a> - 
        {{ $topic->title }}</h1>
    <ul>
    @foreach($topic->replies as $reply)
        <li>
            {{ $reply->body }}
        </li>
    @endforeach
    </ul>
@endsection