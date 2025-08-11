@extends('layouts.app')

@section('title', $viewData["title"])

@section('subtitle', $viewData["subtitle"])

@section('content')

<div class="card mb-3">

<div class="row g-0">

<div class="col-md-4">

<img src="https://laravel.com/img/logotype.min.svg" class="img-fluid rounded-start">

</div>

<div class="col-md-8">

<div class="card-body">

<h5 class="card-title">

@if($viewData["product"]["price"] > 100)

<span class="text-danger">{{ $viewData["product"]["name"] }}</span>

@else

{{ $viewData["product"]["name"] }}

@endif

</h5>

<p class="card-text">{{ $viewData["product"]["description"] }}</p>

<p class="card-text"><strong>Price: ${{ number_format($viewData["product"]["price"], 2) }}</strong></p>

<div class="mt-3">

<button class="btn btn-primary">Add to Cart</button>

<button class="btn btn-outline-secondary ms-2">Add to Wishlist</button>

</div>

</div>

</div>

</div>

</div>

@endsection