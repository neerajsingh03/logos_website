<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Water Mark Image</title>
</head>
<body>
    <form action="{{url('image-process')}}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name ="image">
    <button type="submit">Image Save</button>
    </form>
   
</body>
</html>