@extends('layouts.app')

@section('template_title')
    {{ $inventario->name ?? 'Show Inventario' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Inventario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('inventarios.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Bodega:</strong>
                            {{ $inventario->id_bodega }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $inventario->cantidad }}
                        </div>
                        <div class="form-group">
                            <strong>Created By:</strong>
                            {{ $inventario->created_by }}
                        </div>
                        <div class="form-group">
                            <strong>Updated By:</strong>
                            {{ $inventario->updated_by }}
                        </div>
                        <div class="form-group">
                            <strong>Id Producto:</strong>
                            {{ $inventario->id_producto }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
