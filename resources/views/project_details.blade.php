@extends('layout')

@section('title', $project['name'])

@section('content')
    <h1>{{ $project['name'] }}</h1>
    <p>{{ $project['details'] }}</p>
    <a href="{{ route('projects') }}">Back to Projects</a>
@endsection
