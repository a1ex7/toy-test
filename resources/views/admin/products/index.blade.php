@extends('layouts.app')

@section('content')

    <div class="wrapper container">
        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Product</th>
                <th>Price</th>
                <th>Active</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($entities as $entity)
                <tr>
                    <td>{{ $entity->id }}</td>
                    <td>{{ Html::link(route('products.edit', ['id' => $entity->id]), $entity->name) }}</td>
                    <td>{{ $entity->price }}</td>
                    <td>{{ $entity->active }}</td>
                    <td>{{ $entity->created_at }}</td>
                    <td>{{ $entity->updated_at }}</td>
                    <td>
                        {{ Form::open(['route' => ['products.destroy', $entity->id], 'method' => 'delete']) }}
                        {{ Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) }}
                        {{ Form::close() }}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        {{ Html::link(route('products.create'), 'New Product', ['class' => 'btn btn-info']) }}
    </div>

@endsection
