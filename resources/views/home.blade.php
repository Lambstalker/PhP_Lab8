@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <h1>Welcome to the Home Page</h1>

    @if(empty($products))
        <p>No products available</p>
    @else
        <ul>
            @foreach($products as $product)
                <li>{{ $product }}</li>
            @endforeach
        </ul>
    @endif
@endsection

<x-alert type="success" message="Welcome to the Home Page!" />
