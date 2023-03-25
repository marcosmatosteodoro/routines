@extends('layouts.app')

@section('title', 'Categorias')

@section('content')
    
    <section>
        <h1 class="text-3xl font-bold">
            Detalhes da categoria
        </h1>

        <h2>identificador - {{ $category->id }}</h2>
        <h2>Categoria - {{ $category->name }}</h2>
        <h2>Detalhes de quem usa</h2>
    </section>    
@endsection