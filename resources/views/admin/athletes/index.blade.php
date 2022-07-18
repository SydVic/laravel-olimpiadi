@extends('layouts.dashboard');

@section('content')
    @foreach ($athletes as $athlete)
        <div>
            <a href="{{ route('admin.athletes.show', ['athlete' => $athlete->id]) }}">
                <h2>{{ $athlete->name }}</h2>
            </a>
            <h4>{{ $athlete->gender}}</h4>
            <a href="{{ route('admin.athletes.show', ['athlete' => $athlete->id]) }}">dettagli atleta</a>
        </div>
    @endforeach
    
@endsection