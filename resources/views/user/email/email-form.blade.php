<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Email Form</title>
</head>
<body>
  @if (session('success'))
  <div class="alert alert-success">
      {{ session('success') }}
  </div>
@endif
    <div class="container mr-5 mt-5">
        <form class="form-inline" action="{{route('email')}}" method="post">
            @csrf
          <label for="title">Title:</label>
          <input type="text" class="form-control" id="text" placeholder="Enter Title" name="title">
          <label for="message">Message:</label>
          <input type="text" class="form-control" id="text" placeholder="Enter Message" name="message">
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
</body>
</html>