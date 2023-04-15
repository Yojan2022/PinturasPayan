@include('/layouts/head')
@include('/layouts/nav')
@include('/layouts/menu')

@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Unit
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Agrgar unidad de medida') }}</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('units.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('unit.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@include('/layouts/scripts')