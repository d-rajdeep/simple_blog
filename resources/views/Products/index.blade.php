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
        </div>
    </div>
    <div class="container">
        <div class="text-right">
            <a href="products/create" class="btn btn-dark mt-2">Add New</a>
        </div></div>
    <div class="container">
        <div class="d-flex justify-content-between align-center my-5">
            <div class="h2">All Post</div>
    </div></div>

    {{-- <div class="container">
    <table class="table table-hover">
        <thead>
          <tr>
            <th>Sl.No</th>
            <th>Name</th>
            <th>Image</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)

          <tr>
            <td>{{ $loop->index+1}}</td>
            <td><a href="products/{{ $product->id}}/show" class="text-dark">{{ $product->name}}</a></td>
            <td>
                <img src="products/{{ $product->image}}" class="rounded-circle" width="50" height="50">
            </td>
            <td>
                <a href="products/{{ $product->id }}/show" class="btn btn-success btn-sm">View</a>
                <a href="products/{{ $product->id }}/edit" class="btn btn-dark btn-sm">Edit</a>
                <button class="btn btn-danger btn-sm" onclick="confirmDelete({{ $product->id }})">Delete</button>

            </td>
        </tr>
          @endforeach
        </tbody>
    </table></div> --}}
    {{--start blog post card --}}
    <div class="container mt-5">
        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="products/{{ $product->image }}" class="card-img-top" alt="Product Image">
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="products/{{ $product->id }}/show" class="text-dark">{{ $product->name }}</a>
                            </h5>
                            <p class="card-text">
                                <a href="products/{{ $product->id }}/show" class="text-dark">{{ $product->description }}</a>
                            </p>
                            <a href="products/{{ $product->id }}/show" class="btn btn-success btn-sm">View</a>
                            <a href="products/{{ $product->id }}/edit" class="btn btn-dark btn-sm">Edit</a>
                            <button class="btn btn-danger btn-sm" onclick="confirmDelete({{ $product->id }})">Delete</button>
                        </div>
                    </div>
                </div>

                @if (($loop->iteration % 3) == 0)
                    </div><div class="row"> <!-- Close and open a new row every 3 products -->
                @endif
            @endforeach
        </div>
    </div>

    {{-- end blog post card --}}
<!-- Footer -->
<footer class="bg-dark text-white text-center py-5">
    <div class="container">
        <p class="mb-0">Made by Rajdeep</p>
    </div>
</footer>
</body>
<script>
    function confirmDelete(productId) {
        if (confirm("Are you sure you want to delete this post?")) {
            window.location.href = `products/${productId}/delete`;
        }
    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</html>
