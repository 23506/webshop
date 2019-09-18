<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>


<h1>Producten</h1>
<div class="row">
    @foreach($products as $product)
        <div class="col-12 col-md-6 col-xl-4">
            <div class="bg-primary border border-dark p-1 m-1">
                <h1>{{$product->name}}</h1>
                <h3>{{$product->price}}</h3>
            </div>
        </div>
    @endforeach
</div>

</body>
</html>