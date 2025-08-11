@extends('layouts.app')

@section('title', $viewData["title"])

@section('subtitle', 'Success!')

@section('content')

<div class="container">

<div class="row justify-content-center">

<div class="col-md-8">

<div class="card border-success">

<div class="card-header bg-success text-white text-center">

<h4><i class="fas fa-check-circle"></i> Success!</h4>

</div>

<div class="card-body text-center">

<h5 class="card-title text-success">Product Created</h5>

<p class="card-text">Your product has been successfully created and added to the store.</p>

<div class="mt-4">

<a href="{{ route('product.index') }}" class="btn btn-primary me-2">

<i class="fas fa-list"></i> View All Products

</a>

<a href="{{ route('product.create') }}" class="btn btn-success">

<i class="fas fa-plus"></i> Create Another Product

</a>

</div>

</div>

</div>

</div>

</div>

</div>

@endsection
