@include('/layouts/head')
@include('/layouts/nav')
@include('/layouts/menu')
@extends('layouts.app')

@section('template_title')
    {{ $buy->name ?? "{{ __('Show') Buy" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Ver') }} proveedor</span>
                        </div><br>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('buys.index') }}"> {{ __('volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Supplier Id:</strong>
                            {{ $buy->supplier_id }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $buy->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Numerofactura:</strong>
                            {{ $buy->numeroFactura }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $buy->cantidad }}
                        </div>
                        <div class="form-group">
                            <strong>Valor:</strong>
                            {{ $buy->valor }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
