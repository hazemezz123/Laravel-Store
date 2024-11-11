@section('title', 'Add New Post')
@extends('layout')

@section('content')

    <div class="container mt-5">
        <h2 class="mb-4">Add Product</h2>

        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Product Name -->
            <div class="form-group mb-3">
                <label for="name" class="form-label">Product Name</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Enter product name"
                    required>
            </div>

            <!-- Description -->
            <div class="form-group mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea id="description" name="description" class="form-control" placeholder="Enter product description"
                    rows="3" required></textarea>
            </div>

            <!-- Category Dropdown -->
            <div class="form-group mb-3">
                <label for="category" class="form-label">Category</label>
                <select id="category" name="category" class="form-select" required>
                    <option value="" disabled selected>Select category</option>
                    <option value="electronics">Electronics</option>
                    <option value="clothing">Clothing</option>
                    <option value="home_appliances">Home Appliances</option>
                    <!-- Add more categories as needed -->
                </select>
            </div>

            <!-- Price -->
            <div class="form-group mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" id="price" name="price" class="form-control" placeholder="Enter price" required>
            </div>

            <!-- Stock Quantity -->
            <div class="form-group mb-3">
                <label for="stock" class="form-label">Stock Quantity</label>
                <input type="number" id="stock" name="stock" class="form-control" placeholder="Enter stock quantity"
                    required>
            </div>

            <!-- Product Image -->
            <div class="form-group mb-3">
                <label for="image" class="form-label">Product Image</label>
                <input type="file" id="image" name="image" class="form-control" required>
            </div>

            <!-- Submit Button -->
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Add Product</button>
            </div>
        </form>
    </div>
@endsection
