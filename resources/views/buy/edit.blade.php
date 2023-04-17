@include('/layouts/head')
@include('/layouts/nav')
@include('/layouts/menu')
@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Buy
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">{{ __('Update') }} Buy</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('buys.update', $buy->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('buy.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
