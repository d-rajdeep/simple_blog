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
        <div class="container">

        </div></div>
    </div>
    <div class="container">
        <div class="d-flex justify-content-between align-center my-5">
            <div class="h2">Edit Post</a></div>
    </div>

{{-- alert message --}}
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <strong>{{ $message }}</strong>
        </div>
    @endif
{{-- create table --}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <div class="card mt-3 p-3">
                <form method="POST" action="/products/{{$product->id}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" value="{{old('name',$product->name)}}">
                        @if($errors->has('name'))
                        <span class="text-danger">{{ $error->first('name')}}</span>
                        @endif
                        {{-- <div class="text-danger">
                            @error('name', $product->name)
                            {{$message}}
                            @enderror
                        </div> --}}

                        <div class="form-group">
                            <label>Description</label>
                            <textarea class="form-control" rows="4" name="description">{{ old('description',$product->description)}}>
                            </textarea>
                             @if($errors->has('description'))
                        <span class="text-danger">{{ $error->first('description')}}</span>
                        @endif
                        </div>
                        <div class="form-group">
                            <lebel>Image</lebel>
                            <input type="file" name="image" class="form-control"{{ old('image',$product->image)}}>

                            @if($errors->has('image'))
                        <span class="text-danger">{{ $error->first('image')}}</span>
                        @endif
                    </div>
                        <button type="submit" class="btn btn-success mt-3">Submit</button>
                    </div></div>
            </div>
        </div>
    </div>
</body>
</html>
