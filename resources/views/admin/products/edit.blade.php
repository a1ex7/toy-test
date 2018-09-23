@extends('layouts.app')

@section('content')

    <div class="wrapper container">
        {{ Form::model($entity, ['route' => ['products.update', $entity->id], 'class' => 'form-horizontal', 'method' => 'PUT']) }}
        @include('admin.products.form')
        {{ Form::close() }}

        {!! Form::open(['route' => ['products.destroy', $entity->id], 'method' => 'DELETE']) !!}
        <button class="btn btn-danger">Delete</button>
        {!! Form::close() !!}
    </div>

@endsection
