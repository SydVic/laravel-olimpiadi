@extends('layouts.dashboard');

@section('content')
    @foreach ($athletes as $athlete)
        <div>
            <h2>{{ $athlete->name }}</h2>
            <h4>{{ $athlete->gender}}</h4>
        </div>
    @endforeach
    
@endsection