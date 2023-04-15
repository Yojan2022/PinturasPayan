@include('/layouts/head')
@include('/layouts/nav')
@include('/layouts/menu')

@extends('layouts.app')

@section('template_title')
    {{ $category->name ?? "{{ __('Show') Category" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Ver') }} Categoria</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('categories.index') }}"> {{ __('Volver') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $category->nombre }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@include('/layouts/scripts')