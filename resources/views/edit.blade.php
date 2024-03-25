<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ig girl</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="d-flex flex-column justify-content-center align-items-center">
        <h1>Edit contact</h1>
        <form action="{{route('Instagram.update',$ig->id)}}" method ="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <label for="ig_name">IG Name</label>
                <input type="text" id="ig_name" name="ig_name">
            </div>
            <div class="row">
                <label for="ig_details">IG Details</label>
                <input type="text" id="ig_details" name="ig_details">
            </div>
            <div class="row">
                <label for="ig_status">IG Status</label>
                <input type="text" id="ig_status" name="ig_status">
            </div>
            <button type="submit">Save</button>
        </form>
        <a href="{{route('Instagram.index')}}" class="btn btn-primary">Back</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>


</html>
