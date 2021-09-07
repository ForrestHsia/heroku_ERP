@extends('layouts.app')

@section('title','Product.show app測試')

@section('content')
<main id='show'>
<h1>{{$product["name"]}}</h1>
<BR>
<img width='300' src='{{$product["image_url"]}}'>
<div style="margin: 36px 0;">
    <p>Price：${{ $product["price"] }}</p>
    <input type="number" name="quantity" min="1" value="1" />
    <button type="button" id='addToCart'>Add to cart</button>
</div>
<script>
       var addToCartBtn = document.querySelector('#addToCart');
    if (addToCartBtn) {
        addToCartBtn.addEventListener('click',function(){
            var quantityInput = document.querySelector('input[name="quantity"]');
            if(quantityInput){
                var quantity = parseInt(Cookies.get("quantity")) || 0
                var addQuantity = parseInt(quantityInput.value) || 0
                var newQuantity = quantity + addQuantity
                Cookies.set("quantity", newQuantity)
                alert('購物車內有' + newQuantity + '件' + productName)
            }
        }
        )
    }
    
    </script>
@endsection

@section('inline_js')
    @parent
    <script>
       var addToCartBtn = document.querySelector('#addToCart');
    if (addToCartBtn) {
        addToCartBtn.addEventListener('click',function(){
            var quantityInput = document.querySelector('input[name="quantity"]');
            if(quantityInput){
                var quantity = parseInt(Cookies.get("quantity")) || 0
                var addQuantity = parseInt(quantityInput.value) || 0
                var newQuantity = quantity + addQuantity
                Cookies.set("quantity", newQuantity)
                alert('購物車內有' + newQuantity + '件' + productName)
            }
        }
        )
    }
    </script>

@endsection
