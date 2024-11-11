<!-- resources/views/landing.blade.php -->
@extends('layout')

@section('title', 'Landing Page')

@section('content')
    <div class="jumbotron text-center p-4 rounded-3">
        <h1>Welcome to MyApp</h1>
        <p class="lead mt-4 ">This is a simple landing page for our website.</p>
        <a class="btn btn-primary btn-lg" href="{{ route('products') }}" role="button">View Products</a>
    </div>
@endsection
