@extends('blogs::layouts.master')

@section('content')
    <h1>Hello World</h1>

    <p>Module: {!! config('blogs.name') !!}</p>
    <ul>
        @foreach ($blogs as $blog)
            <li>{{ $blog->name }}</li>
        @endforeach
    </ul>
@endsection
