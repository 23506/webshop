@extends('admin.master')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th>Naam</th>
            <th></th>
        </tr>
        </thead>
        @foreach($products as $product)
            <tr>
                <td>{{$product->name}}</td>
                <td><a href="{{route('products.edit', $product)}}">Bekijk</a></td>
            </tr>

        @endforeach
    </table>
@endsection