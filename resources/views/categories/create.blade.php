@extends('layouts.app')

@section('title', 'Categorias')

@section('content')
    
    <section>
        <h1 class="text-3xl font-bold">
            Cria uma categoria
        </h1>

        <form action=" {{ route('categories.store') }}" method="post">
            @method('POST')
            @csrf
            <input type="text" name="name">
            <input type="submit">
        </form>
    </section>    
@endsection