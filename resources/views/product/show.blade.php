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
                            <strong>N°:</strong>
                            {{ $product->unit_id }}
                        </div><br>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $product->nombre }}
                        </div><br>
                        <div class="form-group">
                            <strong>Marca:</strong>
                            {{ $product->marca }}
                        </div><br>
                        <div class="form-group">
                            <strong>Valor:</strong>
                            {{ $product->valor }}
                        </div><br>
                        <div class="form-group">
                            <strong>Descuento:</strong>
                            {{ $product->descuento }}
                        </div><br>
                        <div class="form-group">
                            <strong>Codigo de barras:</strong>
                            {{ $product->codigoBarras }}
                        </div><br>
                        <div class="form-group">
                            <strong>Categoria:</strong>
                            {{ $product->category_id }}
                        </div><br>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@include('/layouts/scripts')
