@extends('layouts.master')

@section("contenido")

        <div class="row mt-5">
            <div class="col-12 col-md-6 col-lg-5 mx-auto">
                <div class="card">
                    <div class="card-header bg-warning text-white">
                        <span>Agregar Consola</span>
                    </div>

                    <div class="card-body">
                        <div class="mb-3">
                            <label for="nombre-txt" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre-txt">
                        </div>
                    
                        <div class="mb-3">
                            <label for="marca-select" class="form-label">Marca</label>
                            <select id="marca-select" class="form-select">
                                
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="ano-txt" class="form-label">Año Lanzamiento</label>
                            <input type="number" class="form-control" id="ano-txt">
                        </div>
                    </div>

                    <div class="card-footer d-grid gap-1">
                        <button class="btn btn-info">Registrar</button>
                    </div>
                </div>
            </div>
            
        </div>

@endsection

@section("javascript")
    <script src="{{asset('js/home.js')}}"></script>
@endsection