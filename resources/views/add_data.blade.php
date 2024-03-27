<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <a href="{{url('/')}}" class="btn btn-primary my-3">Show Data</a>
        <form  action="{{url('store_data')}}" method="post">
            @csrf
            <div class="form-group">
              <label for="">Name</label>
              <input type="text" class="form-control"  placeholder="Enter your name">
              @error('name')
                  <span class="text-danger">{{$message}}</span>
              @enderror
            </div>
            <div class="form-group">
              <label for="">Email</label>
              <input type="text" class="form-control" id="" placeholder="Enter your  email">
              @error('email')
                  <span class="text-danger">{{$message}}</span>
              @enderror
            </div>
            <button type="submit" class="btn btn-primary my-3">Submit</button>
          </form>
    </div>
       

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>