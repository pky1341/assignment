@extends('base')

@section('content')
<div class="container">
    <h1>Product List</h1>
    <div class="row">
        <div class="col-md-6">
            <!-- Search Form -->
            <form action="" method="GET" class="form-inline mb-4">
                <div class="form-group">
                    <input type="text" name="search" class="form-control" placeholder="Search products...">
                </div>
                <button type="submit" class="btn btn-primary ml-2">Search</button>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <!-- Product List -->
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Category Name</th>
                        <th scope="col">Product Name</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $index => $product)
                    <tr>
                        <th scope="row">{{ $index + 1 }}</th>
                        <td>{{ $product->category->name }}</td>
                        <td>{{ $product->name }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <!-- Pagination Links -->
            
        </div>
    </div>
</div>


@endsection