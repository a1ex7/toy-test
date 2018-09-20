@extends('layouts.app')

@section('content')

    <div class="wrapper container">
        {{ Form::model($entity, ['route' => 'products.store', 'class' => 'form-horizontal', 'enctype' => 'multipart/form-data']) }}

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
            {{ Form::label('active', 'Active:', ['class' => 'col-md-2 control-label']) }}
            <div class="col-md-8">
                {{ Form::checkbox('active', true, old('active')) }}
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-offset-2 col-md-8">
                {{ Form::submit('Save', ['class' => 'btn btn-info']) }}
            </div>
        </div>

        {{ Form::close() }}
    </div>

@endsection
