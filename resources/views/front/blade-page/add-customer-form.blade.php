@extends('front.masterpage')
@section('content')

<div class="d-flex flex-column min-vh-100">
    <!-- Main Content -->
    <div class="container w-50 mt-4 flex-grow-1">
        <h1 class="mb-4">Add New Customer</h1>

        <form action="{{ route('customers.store') }}" method="POST" class="mb-4">
            @csrf

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-12">
                    <label for="phone" class="form-label">Phone:</label>
                    <input type="text" id="phone" name="phone" class="form-control">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-12">
                    <label for="address" class="form-label">Address:</label>
                    <textarea id="address" name="address" class="form-control"></textarea>
                </div>
            </div>

            <button type="submit" class="btn btn-primary w-100">Add Customer</button>
        </form>
    </div>

    <!-- Footer -->
    
</div>

@endsection
