@extends('layouts.app')

@section("title", $viewData["title"])

@section('content')

<div class="container">

<div class="row justify-content-center">

<div class="col-md-8">

<div class="card">

<div class="card-header">Create product</div>

<div class="card-body">

@if($errors->any())

<ul id="errors" class="alert alert-danger list-unstyled">

@foreach($errors->all() as $error)

<li>{{ $error }}</li>

@endforeach

</ul>

@endif


<form method="POST" action="{{ route('product.save') }}">

@csrf

<div class="mb-3">

<label for="name" class="form-label">Product Name</label>

<input type="text" class="form-control" id="name" placeholder="Enter product name" name="name" value="{{ old('name') }}" />

</div>

<div class="mb-3">

<label for="description" class="form-label">Description</label>

<textarea class="form-control" id="description" rows="3" placeholder="Enter product description" name="description">{{ old('description') }}</textarea>

</div>

<div class="mb-3">

<label for="price" class="form-label">Price ($)</label>

<input type="number" class="form-control" id="price" placeholder="Enter price" name="price" value="{{ old('price') }}" step="0.01" min="0.01" />

</div>

<div class="d-grid gap-2">

<button type="submit" class="btn btn-primary">Create Product</button>

<a href="{{ route('product.index') }}" class="btn btn-secondary">Cancel</a>

</div>

</form>

</div>

</div>

</div>

</div>

</div>

</div>

@endsection