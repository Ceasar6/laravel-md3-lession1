<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{route('search')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Word</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
               name="word" placeholder="Product Description">
    </div>
    <button type="submit" name="btn" class="btn btn-primary">Submit</button>
</form>
@isset($result)
    {{$result}}
@endisset
</body>
</html>
