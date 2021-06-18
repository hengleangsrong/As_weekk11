<!DOCTYPE html>
<html lang="en">

<head>
    <title>categories</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h2>Create Category</h2>
        <a href="{{route('dashboard.category.index')}}" class="btn btn-primary mb-3">Back</a>
        <form action="{{route('dashboard.category.update',$category->id)}}" method="post" accept-charset="uf-8">
            @csrf
            <div class="form-group">
                <label for="Name">Name: </label>
                <input type="text" name="name" required="" placeholder="Enter Name" class="form-control"
                    value="{{$category->name}}">
            </div>
            <button type="submit" class="btn btn-success">Save</button>
        </form>


    </div>

</body>

</html>