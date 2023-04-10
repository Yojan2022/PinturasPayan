@include('/layouts/head')
@include('/layouts/nav')
@include('/layouts/menu')

@extends('layouts.app')

@section('template_title')
    {{ $product->name ?? "{{ __('Show') Product" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Ver') }} Producto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('products.index') }}"> {{ __('volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Unit Id:</strong>
                            {{ $product->unit_id }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $product->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Marca:</strong>
                            {{ $product->marca }}
                        </div>
                        <div class="form-group">
                            <strong>Valor:</strong>
                            {{ $product->valor }}
                        </div>
                        <div class="form-group">
                            <strong>Descuento:</strong>
                            {{ $product->descuento }}
                        </div>
                        <div class="form-group">
                            <strong>Codigobarras:</strong>
                            {{ $product->codigoBarras }}
                        </div>
                        <div class="form-group">
                            <strong>Category Id:</strong>
                            {{ $product->category_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@include('/layouts/scripts')
