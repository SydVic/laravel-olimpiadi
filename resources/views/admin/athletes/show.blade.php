@extends('layouts.dashboard')

@section('content')

        <h2>{{ $athlete->name }}</h2> 
        <h4>{{ $athlete->gender}}</h4>
        <ul>
            @foreach($categories as $category)
                <li>
                <h4>{{ $category->name}}</h4>
                <h4>{{ $category->gender}}</h4>
                </li>
            @endforeach
        </ul>
      
@endsection