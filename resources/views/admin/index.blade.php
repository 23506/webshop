@extends('admin.master')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th>Naam</th>
            <th>Studio</th>
            <th>Prijs</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
        @foreach($products as $product)
            <tr>
                <td>{{$product->name}}</td>
                <td>{{$product->studio}}</td>
                <td>&euro;{{$product->getPrice()}}</td>
                <td class="text-right"><a href="{{route('products.edit', $product)}}">Bekijk product</a></td>
                <td class="text-right"><a href="{{route('products.delete', $product)}}" class="text-danger">Verwijder product</a></td>
            </tr>

        @endforeach
    </table>
@endsection