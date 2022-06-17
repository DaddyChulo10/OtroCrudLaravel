@extends('layouts.app')

@section('title', 'Home')

@section('content')



<form action="{{'products.store'}}" method="POST">
    <!-- Por seguridad     -->
    @csrf

    <input type="text" name="title" class="form-control" placeholder="title">
    <input type="text" name="country" class="form-control" placeholder="country">
    <input type="text" name="price" class="form-control" placeholder="price">
    <button type="submit" value="Guardar" class="btn btn-primary">Guardar</button>

</form>


@endsection