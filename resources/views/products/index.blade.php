@extends('layouts.main')

@section('titulo', 'Productos')

@section('content')
    @if($mensaje = Session::get('exito'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <p>{{ $mensaje }}</p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="mt-3">
        <a href="{{ route('products.create') }}" class="btn btn-secondary">
            Registrar nuevo producto
        </a>
    </div>
    <div class="my-3">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Nombre producto</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $item)
                    <tr>
                        <td>{{ $item->nombre}}</td>
                        <td class="d-flex">
                            <a href="{{ route('products.show', $item->id) }}" class="btn btn-info justify-content-start me-1 rounded-circle"><i class="fa-solid fa-eye"></i></a>
                            <a href="{{ route('products.edit', $item->id) }}" class="btn btn-warning justify-content-start me-1 rounded-circle"><i class="fa-solid fa-pen-to-square"></i></a>
                            <form action="{{ route('products.destroy', $item->id) }}" method="post" class="justify-content-start form-delete">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger rounded-circle"><i class="fa-solid fa-trash-can"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection