@extends('layout')
@section('title', 'Home')
@section('content')

    
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 text-center">
                <h1>Welcome to My Awesome Website!</h1>
                <p>We are delighted to have you here.</p>
                <p>Feel free to explore and enjoy your stay!</p>
                <a href="{{ route('products.create') }}" class="btn btn-primary">Create Product</a>
            </div>
        </div>
    </div>
@endsection
