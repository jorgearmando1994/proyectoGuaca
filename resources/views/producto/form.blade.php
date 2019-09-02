@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Producto</div>
                <div class="card-body">
                    <form method="POST" >
                        @csrf
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Tipo de Producto</label>
                            <div class="col-md-6">
                                <select class="form-control">  <option><option>
                                <option>electrodomestico<option>
                                <option>vehiculo<option>
                                <option>joyeria<option>  </select>                                
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">nombre</label>
                            <div class="col-md-6">
                                <select class="form-control">  <option><option>
                                <option>bicicleta<option>
                                <option>motocicleta<option>
                                <option>televisor<option>
                                <option>nevera<option>
                                <option>pc porttatil<option>
                                <option>lavadora<option>  </select>                                
                            </div>
                      
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection