@extends('layouts.app')

@section('template_title')
    {{ $historiale->name ?? 'Show Historiale' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Historiale</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('historiales.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $historiale->cantidad }}
                        </div>
                        <div class="form-group">
                            <strong>Id Bodega Origen:</strong>
                            {{ $historiale->id_bodega_origen }}
                        </div>
                        <div class="form-group">
                            <strong>Id Bodega Destino:</strong>
                            {{ $historiale->id_bodega_destino }}
                        </div>
                        <div class="form-group">
                            <strong>Created By:</strong>
                            {{ $historiale->created_by }}
                        </div>
                        <div class="form-group">
                            <strong>Updated By:</strong>
                            {{ $historiale->updated_by }}
                        </div>
                        <div class="form-group">
                            <strong>Id Inventario:</strong>
                            {{ $historiale->id_inventario }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
