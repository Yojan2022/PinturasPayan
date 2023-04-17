<div class="box box-info padding-1">
    <div class="box-body">
        <div class="container">
        <div class="row align-items-start">
        <div class="col">
        <div class="form-group">
            {{ Form::label('Proveedor') }}
            {{ Form::select('supplier_id',$suppliers, $buy->supplier_id, ['class' => 'form-control' . ($errors->has('supplier_id') ? ' is-invalid' : ''), 'placeholder' => 'Proveedor']) }}
            {!! $errors->first('supplier_id', '<div class="invalid-feedback">:message</div>') !!}
        </div><br>
        <div class="form-group">
            {{ Form::label('fecha') }}
            {{ Form::date('fecha', $buy->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('fecha', '<div class="invalid-feedback">:message</div>') !!}
        </div><br>
        <div class="form-group">
            {{ Form::label('Numero de factura') }}
            {{ Form::number('numeroFactura', $buy->numeroFactura, ['class' => 'form-control' . ($errors->has('numeroFactura') ? ' is-invalid' : ''), 'placeholder' => 'Numero de factura']) }}
            {!! $errors->first('numeroFactura', '<div class="invalid-feedback">:message</div>') !!}
        </div><br>
        </div>
        <div class="col">
        <div class="form-group">
            {{ Form::label('Cantidad') }}
            {{ Form::number('cantidad', $buy->cantidad, ['class' => 'form-control' . ($errors->has('cantidad') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad']) }}
            {!! $errors->first('cantidad', '<div class="invalid-feedback">:message</div>') !!}
        </div><br>
        <div class="form-group">
            {{ Form::label('Valor') }}
            {{ Form::number('valor', $buy->valor, ['class' => 'form-control' . ($errors->has('valor') ? ' is-invalid' : ''), 'placeholder' => 'Valor']) }}
            {!! $errors->first('valor', '<div class="invalid-feedback">:message</div>') !!}
        </div><br>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Aceptar') }}</button>
    </div>
</div>
</div>        
</div>
</div>