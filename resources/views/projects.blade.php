@extends('layout')

@section('title', 'Projects')

@section('content')
    <h1>My Projects</h1>
    @foreach ($projects as $project)
        <div>
            <h2><a href="{{ route('project.details', $project['id']) }}">{{ $project['name'] }}</a></h2>
            <p>{{ $project['description'] }}</p>
        </div>
    @endforeach
@endsection
