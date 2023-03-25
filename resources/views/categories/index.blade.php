@extends('layouts.app')

@section('title', 'Categorias')

@section('content')
    
    <section>
        <h1 class="text-3xl font-bold">
            Todas as categorias
        </h1>

        <a href="{{ route('categories.create') }}">Crie uma nova categoria</a>
        <table class="table-auto">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>Total de atividades</th>
                    <th>Ações</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category['id'] }}</td>
                        <td>
                            <a href=" {{ route('categories.show', $category['id']) }} ">
                                {{ $category['name'] }}
                            </a>
                        </td>
                        <td>0</td>
                        <td>
                            <a href="{{ route('categories.edit', $category['id']) }}">
                                Edit
                            </a>
                            <a href="{{ route('categories.destroy', $category['id']) }}">
                                Delete
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
    </section>    
@endsection