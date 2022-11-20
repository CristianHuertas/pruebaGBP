<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('cantidad') }}
            {{ Form::text('cantidad', $historiale->cantidad, ['class' => 'form-control' . ($errors->has('cantidad') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad']) }}
            {!! $errors->first('cantidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_bodega_origen') }}
            {{ Form::text('id_bodega_origen', $historiale->id_bodega_origen, ['class' => 'form-control' . ($errors->has('id_bodega_origen') ? ' is-invalid' : ''), 'placeholder' => 'Id Bodega Origen']) }}
            {!! $errors->first('id_bodega_origen', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_bodega_destino') }}
            {{ Form::text('id_bodega_destino', $historiale->id_bodega_destino, ['class' => 'form-control' . ($errors->has('id_bodega_destino') ? ' is-invalid' : ''), 'placeholder' => 'Id Bodega Destino']) }}
            {!! $errors->first('id_bodega_destino', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('created_by') }}
            {{ Form::text('created_by', $historiale->created_by, ['class' => 'form-control' . ($errors->has('created_by') ? ' is-invalid' : ''), 'placeholder' => 'Created By']) }}
            {!! $errors->first('created_by', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('updated_by') }}
            {{ Form::text('updated_by', $historiale->updated_by, ['class' => 'form-control' . ($errors->has('updated_by') ? ' is-invalid' : ''), 'placeholder' => 'Updated By']) }}
            {!! $errors->first('updated_by', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('id_inventario') }}
            {{ Form::text('id_inventario', $historiale->id_inventario, ['class' => 'form-control' . ($errors->has('id_inventario') ? ' is-invalid' : ''), 'placeholder' => 'Id Inventario']) }}
            {!! $errors->first('id_inventario', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>