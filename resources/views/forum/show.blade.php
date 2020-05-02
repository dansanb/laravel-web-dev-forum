@extends('layouts.master')

@section('title', 'Web Dev Forum - ' . $forum->name)

@section('content')
    <h1>Web Dev Forum - {{ $forum->name }}</h1>
    <ul>
    @foreach($forum->topics as $topic)
        <li>
            <a href="{{ $topic->id }}">
                {{ $topic->title }}
            </a>
        </li>
    @endforeach
    </ul>
@endsection