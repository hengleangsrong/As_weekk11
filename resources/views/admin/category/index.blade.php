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
        <h2>All category</h2>
        <a href="{{route('dashboard.category.create')}}" class="btn btn-primary mb-3">Create New</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                <tr>
                    <td>{{$category-> id}}</td>
                    <td>{{ $category-> name }}</td>
                    <td>
                        <a href="{{route('dashboard.category.edit', $category->id)}} " class=" btn btn-success">Edit
                        </a>
                        <a href="{{route('dashboard.category.delete', $category->id)}}" class="btn btn-danger">Delete
                        </a>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>

</body>

</html>