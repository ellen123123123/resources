<!-- resources/views/products/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Novo Produto</h1>
    
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        
        <div class="form-group">
            <label for="name">Nome:</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        
        <div class="form-group">
            <label for="price">Preço:</label>
            <input type="number" name="price" id="price" class="form-control" required>
        </div>
        
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
@endsection
