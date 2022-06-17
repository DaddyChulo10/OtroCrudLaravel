@extends('layouts.app')

@section('title', 'Home')

@section('content')

<table class="table table-hover">
    <thead>
        <tr>
            <th>Titulo</th>
            <th>Pais</th>
            <th>precio</th>
            <th>Actualizar</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product->title }}</td>
            <td>{{ $product->country }}</td>
            <td>{{ $product->price }}</td>
            <td>
                <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Editar</a>
            </td>
            <td>
                <form action="{{ route('products.destroy', $product->id) }}" method="GET">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
</table>

@endsection