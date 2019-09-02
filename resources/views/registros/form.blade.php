@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Registros</div>
                <div class="card-body">
                    <form method="POST" >
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Codigo</label>
                            <div class="col-md-6">
                                <input id="name" class="form-control" type="text">                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Nombre</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Producto</label>
                            <div class="col-md-6">
                                <select class="form-control">  <option><option>
                                <option>Producto1<option>
                                <option>Producto2<option>
                                <option>Producto3<option>  </select>                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Cliente</label>
                            <div class="col-md-6">
                                <select class="form-control">  <option><option>
                                <option>cliente1<option>
                                <option>Cliente2<option>
                                <option>Cliente3<option>  </select>                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Bodega</label>
                            <div class="col-md-6">
                                <select class="form-control">  <option><option>
                                <option>Bodega1<option>
                                <option>Bodega2<option>
                                <option>Bodega3<option>  </select>                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Calidad</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-header">Facturacion</div>
                <div class="card-body">
                    <form method="POST" >
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Fecha de ingreso</label>
                            <div class="col-md-6">
                            <input class="form-control">  <option><option>
                                <input id="name" class="form-control" type="text">                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Valor prestado</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Fecha de vencimiento</label>
                            <div class="col-md-6">
                                <input class="form-control">  <option><option>
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <br>
            <div class="card">
                <div class="card-header">Adjuntos</div>
                <div class="card-body">
                    <form method="POST" >
                        @csrf
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Tipo de Adjunto</label>
                            <div class="col-md-6">
                                <select class="form-control">  <option><option>
                                <option>Tarjeta de Propiedad<option>
                                <option>Factura<option>
                                <option>Traspasos<option>  </select>                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Archivo</label>
                            <div class="col-md-6">
                                <select class="form-control">  <option><option>
                                    </select>                                
                            
                        
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection