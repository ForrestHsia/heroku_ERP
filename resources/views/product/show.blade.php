@extends('layouts.app')

@section('title','Product.show app測試')

@section('content')
<h7>product</h7>
<BR>
<img width='400' src='{{$product["image_url"]}}'>
@endsection