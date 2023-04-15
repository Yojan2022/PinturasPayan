@include('/layouts/head')
@include('/layouts/nav')
@include('/layouts/menu')
@extends('layouts.app')

@section('template_title')
    {{ $unit->name ?? "{{ __('Show') Unit" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Unit</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ view('category.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $unit->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Unidadml:</strong>
                            {{ $unit->unidadMl }}
                        </div>
                        <div class="form-group">
                            <strong>Factorconversion:</strong>
                            {{ $unit->factorConversion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@include('/layouts/scripts')
