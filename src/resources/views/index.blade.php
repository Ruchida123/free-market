@extends('layouts.app')

@section('css')
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
<link rel="stylesheet" href="{{ asset('css/modal/message.css') }}">
@endsection

@section('content')
<div class="shop shop-gap">
@foreach ($products as $product)
  <div class="shop-content">
    <img class="shop-img" src="{{ $product['image'] }}" alt="No Image" />
    <div class="shop-content__name">
      {{ $product['name'] }}
    </div>
    <div class="shop-content__price">
      {{ $product['price'] }}
    </div>
    <div class="shop-content__detail">
      <form class="detail-form" action="/detail/{{ $product['id'] }}" method="get">
        @csrf
        <button class="detail-button" type="submit">詳しくみる</button>
      </form>
    </div>
  </div>
@endforeach
</div>
@endsection