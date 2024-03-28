<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Show Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <a href="{{url('add_data')}}" class="btn btn-primary my-3">Add Data</a>
        @if (Session::has('msg'))
        <p class="alert alert-success">{{Session::get('msg')}}</p>
        @endif
        <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                
              </tr>
            </thead>
            <tbody>
              @foreach ($shData as $key=>$data )
              <tr>
                <td>{{$key+1}}</td>
                <td>{{$data->name}}</td>
                <td>{{$data->email}}</td>
                <td>
                  <a href="{{url('/edit_data/'.$data->id)}}" class="btn btn-success">Edit</a>
                  <a href="{{url('/delete_data/'.$data->id)}}" class="btn btn-danger">Delete</a>
                </td>
              </tr>
              @endforeach
            
          </table>
          {{$shData->links()}}
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>