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

<p class="card-text"><strong>Price: ${{ number_format($viewData["product"]["price"], 2) }}</strong></p>

<div class="mt-3">

@foreach($viewData["product"]->comments as $comment)

- {{ $comment->getDescription() }}<br />

@endforeach

<div class="mt-3"></div>

<button class="btn btn-primary">Add to Cart</button>

<button class="btn btn-outline-secondary ms-2">Agregar al carrito</button>
<a href="{{ route('cart.add', ['id' => $viewData['product']['id']]) }}" class="btn btn-outline-secondary ms-2">Agregar al carrito</a>
<a href="{{ route('cart.index') }}" class="btn btn-outline-secondary ms-2">Ir al carrito</a>
</div>

</div>

</div>

</div>

</div>

@endsection