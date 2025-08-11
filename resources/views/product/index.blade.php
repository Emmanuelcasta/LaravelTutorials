@extends('layouts.app')

@section('title', $viewData["title"])

@section('subtitle', $viewData["subtitle"])

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">

<h2>{{ $viewData["subtitle"] }}</h2>

<a href="{{ route('product.create') }}" class="btn btn-success">

<i class="fas fa-plus"></i> Create New Product

</a>

</div>

<div class="row">

@foreach ($viewData["products"] as $product)

<div class="col-md-4 col-lg-3 mb-2">

<div class="card">

<img src="https://laravel.com/img/logotype.min.svg" class="card-img-top img-card">

<div class="card-body text-center">

<h5 class="card-title">{{ $product["name"] }}</h5>

<p class="card-text text-muted">${{ number_format($product["price"], 2) }}</p>

<a href="{{ route('product.show', ['id'=> $product["id"]]) }}"

class="btn bg-primary text-white">View Details</a>

</div>

</div>

</div>

@endforeach

</div>

@endsection