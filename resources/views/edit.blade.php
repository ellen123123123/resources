<!-- resources/views/products/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Editar Produto</h1>
    
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="name">Nome:</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $product->name }}" required>
        </div>
        
        <div class="form-group">
            <label for="price">Preço:</label>
            <input type="number" name="price" id="price" class="form-control" value="{{ $product->price }}" required>
        </div>
        
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
@endsection
