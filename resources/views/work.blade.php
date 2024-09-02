@extends('layout')

@section('title', 'Work Experiences')

@section('content')
    <h1>My Work Experiences</h1>
    @foreach ($workExperiences as $experience)
        <div>
            <h2>{{ $experience['title'] }}</h2>
            <p>{{ $experience['description'] }}</p>
            <p>{{ $experience['date'] }}</p>
        </div>
    @endforeach
@endsection
