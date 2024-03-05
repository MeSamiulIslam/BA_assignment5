@extends('layout')

@section('title', 'Create Product')

@section('content')
<div class="container">
    <h1>Create Product</h1>
    <form action="{{ route('products.store') }}" method="POST" id="create-product-form">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" required maxlength="255">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" required></textarea>
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" id="price" name="price" required min="0" step="0.01">
            @error('price')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
@endsection

@push('scripts')
<script>
    // Client-side validation using JavaScript
    document.getElementById('create-product-form').addEventListener('submit', function(event) {
        // Validate name field
        var nameInput = document.getElementById('name');
        if (nameInput.value.trim() === '') {
            nameInput.classList.add('is-invalid');
            event.preventDefault();
        } else {
            nameInput.classList.remove('is-invalid');
        }

        // Validate price field
        var priceInput = document.getElementById('price');
        if (priceInput.value.trim() === '' || parseFloat(priceInput.value) < 0) {
            priceInput.classList.add('is-invalid');
            event.preventDefault();
        } else {
            priceInput.classList.remove('is-invalid');
        }
    });
</script>
@endpush
