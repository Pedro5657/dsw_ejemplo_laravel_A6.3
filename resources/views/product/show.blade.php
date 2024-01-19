@extends("layouts.app")
@section("title","{$product["name"]} - Mi tienda online")
@section("subtitle","{$product["name"]} - Product information")
@section("content")
	<img src="{{asset("img/{$product["image"]}")}}" alt="{{$product["name"]}}">
	<h3>{{$product["name"]}} ({{$product["price"]}})</h3>
	<p>{{$product["description"]}}</p>
	<a href="">Add to Cart</a>
@endsection