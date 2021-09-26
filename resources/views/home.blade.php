@extends('layouts.app')

@section('title','D:/test測試title')


@section('content')
<main id="index">
<h1>H1測試文字</h1>
<h5>H5測試文字</h5>
<div id='a'>{{$ver*$ver}}</div>
<div id='b'>{{$levela}}</div>
<a href='{{route("products.index")}}'>Go to Product</a>
<BR>

@endsection


