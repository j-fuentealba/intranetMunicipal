@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row justify-content-center">

        <div class="col-md-12">

            <div class="card border-secondary shadow">

                <div class="card-header text-center text-white bg-secondary">

                    <h3 class="font-weight-lighter">
                    
                        Administración - 

                        <small>Dependencias Municipales</small>

                    </h3>

                </div>

                <div class="card-body">
                
                    @if (session('status'))
                
                        <div class="alert alert-success" role="alert">
                
                            {{ session('status') }}
                
                        </div>
                
                    @endif

                    <h4> Editar Dependencia Municipal: <small class="text-muted">{{ $dependency->name }}</small> </h4>

                    <hr style="background-color: #d7d7d7">

                    <div class="py-3">

                        <form method="POST" action="{{ route('dependencies.update', $dependency->id) }}" class="needs-validation" novalidate>

                            @method('PUT')

                            @csrf

                            <div class="form-row">

                                <div class="col-md-12 mb-3">
                                                          
                                    <label for="name">Nombre</label>

                                    <input type="text" class="form-control" id="name" name="name" placeholder="Nombre de la Dependencia Municipal" value="{{ $dependency->name }}" required>

                                    <div class="invalid-feedback">
                                                                        
                                        Por favor ingrese Nombre de la Dependencia Municipal

                                    </div>

                                </div>

                            </div>

                            <div class="mb-3 form-row">

                                <button class="btn btn-success btn-block" type="submit">

                                    <i class="fas fa-sync-alt"></i>

                                        Actualizar Dependencia Municipal

                                </button>

                                <a href="{{ route('dependencies.index') }}" class="btn btn-secondary btn-block" type="button">

                                    <i class="fas fa-arrow-left"></i>

                                        Atrás

                                </a>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection

<script>

    //Funcion que no permite guardar el formulario si no cumple con las validaciones establecidas en él
    (function() {
        
        'use strict';
        
        window.addEventListener('load', function() {
                           
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
                                
            var forms = document.getElementsByClassName('needs-validation');

            // Loop over them and prevent submission
                                
            var validation = Array.prototype.filter.call(forms, function(form) {
                                  
                form.addEventListener('submit', function(event) {
                    
                    if (form.checkValidity() === false) {
                        
                        event.preventDefault();
                        
                        event.stopPropagation();
                    
                    }
                    
                    form.classList.add('was-validated');
                                      
                }, false);
                                
            });

        }, false);
                        
    })();

</script>
