<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $unit->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre' ,'required' => 'required']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div><br>
        <div class="form-group">
            {{ Form::label('Unidad de medida') }}
            {{ Form::number('unidadMl', $unit->unidadMl, ['class' => 'form-control' . ($errors->has('unidadMl') ? ' is-invalid' : ''), 'placeholder' => 'Unidadml','required' => 'required']) }}
            {!! $errors->first('unidadMl', '<div class="invalid-feedback">:message</div>') !!}
        </div>
       <!-- <div class="form-group">
            {{ Form::label('factorConversion') }}
            {{ Form::number('factorConversion', $unit->factorConversion, ['class' => 'form-control' . ($errors->has('factorConversion') ? ' is-invalid' : ''), 'placeholder' => 'Factorconversion']) }}
            {!! $errors->first('factorConversion', '<div class="invalid-feedback">:message</div>') !!}
        </div>-->

    </div>
    <br>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Aceptar') }}</button>
    </div>
</div>