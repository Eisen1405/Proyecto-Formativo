@extends('layouts.main')

@section('titulo', 'Nuevo usuario')

@section('content')
    <form action="{{ route('usuarios.store') }}" method="post" class="needs-validation" novalidate>
        @csrf
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
            <label for="nombre">Nombre</label>
            <div class="invalid-feedback">
                Debe ingresar el nombre del usuario
            </div>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="apellido" name="apellido" placeholder="apellido" required>
            <label for="apellido">Apellido</label>
            <div class="invalid-feedback">
                Debe ingresar el apellido del usuario
            </div>
        </div>
        <div class="form-floating mb-3">
            <input type="password" class="form-control" id="contrasenia" name="contrasenia" placeholder="Password" required>
            <label for="contrasenia">Contraseña</label>
            <div class="invalid feedback">
                Debe ingresar una contraseña
            </div>
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