@include('/layouts/head')
@include('/layouts/nav')
@include('/layouts/menu')

@extends('layouts.app')

@section('template_title')
    {{ $supplier->name ?? "{{ __('Show') Supplier" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Ver') }} Proveedor</span>
                        </div><br>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('suppliers.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $supplier->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $supplier->descripcion }}
                        </div><br>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@include('/layouts/scripts')
