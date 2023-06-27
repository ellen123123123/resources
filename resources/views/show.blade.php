<!-- resources/views/products/show.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Detalhes do Produto</h1>
    
    <p><strong>ID:</strong> {{ $product->id }}</p>
    <p><strong>Nome:</strong> {{ $product->name }}</p>
    <p><strong>Preço:</strong> {{ $product->price }}</p>
    
    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary">Editar</a>
    
    <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display: inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Excluir</button>
    </form>
@endsection
