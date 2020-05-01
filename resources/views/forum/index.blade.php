@extends('layouts.master')

@section('title', 'Web Dev Forum - Forum Categories')

@section('content')
    <h1>Web Dev Forum</h1>
    <ul>
    @foreach($forums as $forum)
        <li>{{ $forum->name }}</li>    
    @endforeach
    </ul>
@endsection