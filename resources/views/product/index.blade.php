@extends('layouts.app')

@section('title','Product.index 測試')

@section('content')
<main id='index'>
<h5>Products.index test</h5>
<BR>
<div><a href="{{route('products.create')}}">create</a></div>
<hr>
@foreach ($products as $product)
<div>
    <div>
        <p id='a'>{{$product['name']}}</p>
        <a href="{{route('products.show', ['product' => $product['id']])}}">
        <img width='350' src='{{$product["image_url"]}}'></a>
    </div>
    <div>
        <a href="{{route('products.edit', ['product' => $product['id']])}}">edit</a>
        <form method='post' action='{{route("products.destroy",["product" => $product["id"]])}}'>
        @csrf
        @method("DELETE")
        <button type="submit">Delete</button>
        </form>
    </div>
</div>
<hr>
<BR>
@endforeach
</main>
@endsection