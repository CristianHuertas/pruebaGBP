@php
$configData = Helper::appClasses();
@endphp

@extends('layouts/layoutMaster')

@section('title', 'Crear Invertario')


@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Inventario</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('inventarios.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('inventario.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
