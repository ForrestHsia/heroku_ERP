@extends('layouts.app')

@section('title','D:/test測試title')


@section('content')
<h1>H1測試文字</h1>
<h5>H5測試文字</h5>
<div id='a'>Div id=a測試文字</div>
<div id='b'>Div id=b測試文字</div>
{{$ver}}
<BR>
{{$level}}
@endsection


