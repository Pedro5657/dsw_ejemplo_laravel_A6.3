@extends("layouts.app")
@section("title","Listado de productos - Tienda online")
@section("subtitle","List of products")
@section("content")
	@foreach ($products as $product)
			<div>
				<img src="{{asset("img/$product->image")}}" alt="{{$product->name}}">
				<a href="{{route("product.show",$product->id)}}">{{$product->name}}</a>
			</div>
	@endforeach
@endsection