@extends('layouts.main')

@section('titulo', 'Nuevo producto')

@section('content')
    <form action="{{ route('products.store') }}" method="post" class="needs-validation" novalidate>
        @csrf
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
            <label for="nombre">Nombre</label>
        </div>
        <div class="form-floating mb-3">
            <input type="number" class="form-control" id="precio" name="precio" placeholder="precio" required>
            <label for="precio">Precio</label>
        </div>
        <div class="form-floating mb-3">
            <input type="number" class="form-control" id="Cantidad" name="Cantidad" placeholder="Cantidad" required>
            <label for="Cantidad">Cantidad</label>
        </div>
        <button type="submit" class="btn btn-secondary">Guardar</button>
    </form>
@endsection

@section('scripts')
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
    (() => {
    'use strict'

     // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
      form.addEventListener('submit', event => {
        if (!form.checkValidity()) {
             event.preventDefault()
             event.stopPropagation()
         }

        form.classList.add('was-validated')
        }, false)
    })
    })()
    </script>

@endsection