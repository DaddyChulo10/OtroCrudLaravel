@extends('layouts.app')

@section('title', 'Editar')

@section('content')



<form action="{{'products.update',  $product->id }}" method="POST">
    <!-- Por seguridad     -->
    @csrf
    @method('put')
    <h4>Editar ID = {{$product->id}} </h4>

    <input type="text" name="title" class="form-control" value="{{$product->title}}">
    <input type="text" name="country" class="form-control" value="{{$product->country}}">
    <input type="text" name="price" class="form-control" value="{{$product->price}}">
    <input type="submit" value="Guardar" class="btn btn-primary">




</form>


@endsection