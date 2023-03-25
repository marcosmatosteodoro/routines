@extends('layouts.app')

@section('title', 'Categorias')

@section('content')
    
    <section>
        <h1 class="text-3xl font-bold">
            Edite uma categoria
        </h1>

        <form action="{{ route('categories.update', $category->id) }}" method="post">
            @method('PUT')
            @csrf
            
            <input type="text" value="{{ $category->name }}">
            <input type="submit" value="enviar">
        </form>
    </section>    
@endsection