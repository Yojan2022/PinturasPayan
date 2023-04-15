    <div class="box box-info padding-1">
        <div class="box-body">
            <div class="container">
            <div class="row align-items-start">
                <div class="col">
                    <div class="form-group">
                        {{ Form::label('Unidad de medida') }}
                        {{ Form::select('unit_id',$units, $product->unit_id, ['class' => 'form-control' . ($errors->has('unit_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione' ,'required' => 'required']) }}
                        {!! $errors->first('unit_id', '<div class="invalid-feedback">:message</div>') !!}
                    </div><br>
                    <div class="form-group">
                        {{ Form::label('Nombre') }}
                        {{ Form::text('nombre', $product->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre','required' => 'required']) }}
                        {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
                    </div><br>
                    <div class="form-group">
                        {{ Form::label('Marca') }}
                        {{ Form::text('marca', $product->marca, ['class' => 'form-control' . ($errors->has('marca') ? ' is-invalid' : ''), 'placeholder' => 'Marca','required' => 'required']) }}
                        {!! $errors->first('marca', '<div class="invalid-feedback">:message</div>') !!}
                    </div><br>
                </div>
                <div class="col">    
                    <div class="form-group">
                        {{ Form::label('Valor unitario') }}
                        {{ Form::number('valor', $product->valor, ['class' => 'form-control' . ($errors->has('valor') ? ' is-invalid' : ''), 'placeholder' => 'Valor','required' => 'required']) }}
                        {!! $errors->first('valor', '<div class="invalid-feedback">:message</div>') !!}
                    </div><br>
                    <div class="form-group">
                        {{ Form::label('Descuento') }}
                        {{ Form::number('descuento', $product->descuento, ['class' => 'form-control' . ($errors->has('descuento') ? ' is-invalid' : ''), 'placeholder' => 'Descuento','required' => 'required']) }}
                        {!! $errors->first('descuento', '<div class="invalid-feedback">:message</div>') !!}
                    </div><br>
                    <div class="form-group">
                        {{ Form::label('Codigo de barras') }}
                        {{ Form::number('codigoBarras', $product->codigoBarras, ['class' => 'form-control' . ($errors->has('codigoBarras') ? ' is-invalid' : ''), 'placeholder' => 'Codigo de barras','required' => 'required']) }}
                        {!! $errors->first('codigoBarras', '<div class="invalid-feedback">:message</div>') !!}
                    </div><br>
                    <div class="form-group">
                        {{ Form::label('Categoria') }}
                        {{ Form::select('category_id',$category, $product->category_id, ['class' => 'form-control' . ($errors->has('category_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione','required' => 'required']) }}
                        {!! $errors->first('category_id', '<div class="invalid-feedback">:message</div>') !!}
                    </div><br>

                    </div>
                    <br>
                    <div class="box-footer mt20">
                        <button type="submit" class="btn btn-primary">{{ __('Aceptar') }}</button>
                </div>
            </div>
            </div>        
        </div>
    </div>
