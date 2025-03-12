<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Simple Blog</title>
</head>
<body>
    <div class="bg-dark">
        <div class="container py-3">
            <div class="h1 text-white"><p style=text-align:center>Simple Blog</div>
                <a href="http://127.0.0.1:8000/" class="btn btn-success mt-2">Home</a>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8 mt-4">
                <div class="card p-4">
                    <p>Name : <b>{{ $product->name}}</b></p>
                    <p>Description : <b>{{ $product->description}}</b></p>
                    <img src="/products/{{$product->image}}" class="rounded" width="100%">
                </div>
            </div>
        </div>
    </div>
