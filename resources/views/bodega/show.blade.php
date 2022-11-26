@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Bodega')

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Bodega</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('bodegas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $bodega->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Id Responsable:</strong>
                            {{ $bodega->id_responsable }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $bodega->estado }}
                        </div>
                        <div class="form-group">
                            <strong>Created By:</strong>
                            {{ $bodega->created_by }}
                        </div>
                        <div class="form-group">
                            <strong>Updated By:</strong>
                            {{ $bodega->updated_by }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
