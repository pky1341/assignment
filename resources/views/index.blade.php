@extends('base')

@section('content')
<h1>Categories</h1>
<table class="table">
    <thead>
        <tr>
            <th scope="col">Sr no</th>
            <th scope="col">Category Name</th>
            <th scope="col">Products</th>
            <th scope="col">Count of product</th>
        </tr>
    </thead>
    <tbody>
        @foreach($categories as $index => $category)
        <tr>
            <th scope="row">{{ $index + 1 }}</th>
            <td>{{ $category->name }}</td>
            <td>
                @foreach($category->products as $product)
                {{ $product->name }},
                @endforeach
            </td>
            <td>{{ $category->products->count() }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection