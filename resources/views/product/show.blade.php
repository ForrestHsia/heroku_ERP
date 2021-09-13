@extends('layouts.app')

@section('title','Product.show app測試')

@section('content')
<main id='show'>
<h1>{{$product["name"]}}</h1>
<BR>
<img width='300' src='{{$product["image_url"]}}'>
<div style="margin: 36px 0;">
    <p>Price：${{ $product["price"] }}</p>
    <input type="number" name="quantity" min="1" value="1"/>
    <button type="button" id='addToCart'>Add to cart</button>
</div>



@endsection

@section('inline_js')
    @parent
    <script>
        var productId = "{{ $product['id'] }}"
        initAddToCart(productId)
    </script>
@endsection
