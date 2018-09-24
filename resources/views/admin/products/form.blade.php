<div class="form-group">
    {{ Form::label('name', 'Name:', ['class' => 'col-md-2 control-label']) }}
    <div class="col-md-8">
        {{ Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => 'Enter product name']) }}
    </div>
</div>
<div class="form-group">
    {{ Form::label('price', 'Price:', ['class' => 'col-md-2 control-label']) }}
    <div class="col-md-8">
        {{ Form::number('price', old('price'), ['class' => 'form-control', 'placeholder' => 'Enter product price']) }}
    </div>
</div>
<div class="form-group">
    @foreach( $entity->vouchers as $voucher)
        <p class="badge badge-info">Voucher: {{$voucher->id}}, Discount: {{$voucher->discount->value}}%</p>
    @endforeach
</div>
<div class="form-group">
    <div class="col-md-8">
        {{ Form::checkbox('active', true, old('active'), ['id' => 'active']) }}
        {{ Form::label('active', 'Active', ['class' => 'col-md-2 control-label', 'for' => 'active']) }}
    </div>
</div>
<div class="form-group">
    <div class="col-md-offset-2 col-md-8">
        {{ Form::submit('Save', ['class' => 'btn btn-info']) }}
    </div>
</div>
