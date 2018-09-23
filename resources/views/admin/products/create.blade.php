@extends('layouts.app')

@section('content')

    <div class="wrapper container">
        {{ Form::model($entity, ['route' => 'products.store', 'class' => 'form-horizontal', 'method' => 'POST']) }}
        @include('admin.products.form')
        {{ Form::close() }}
    </div>

@endsection
