@extends('base')
@section('content')
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<h1>Add Product for {{ $cate->name }}</h1>
<form method="POST" action="{{route('store')}}">
    @csrf
    <div class="form-group">
        <label for="name">Product Name</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <input type="hidden" name="category_id" value="{{ $cate->id }}">
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection