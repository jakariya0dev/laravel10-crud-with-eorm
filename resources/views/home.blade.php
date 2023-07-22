<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 10 CRUD Demo using eORM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <h1>Laravel 10 CRUD Demo using eORM</h1>
    <div class="container">
        
        <div class="row">
            <div class="col-md-3">
              @if (session()->has('status'))
              <div class="alert alert-danger">
                {{ session('status') }}
              </div>
              @endif
                <form method="POST" action="{{ url('/') }}">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Student name</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="name">
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Phone number</label>
                      <input type="text" class="form-control" id="exampleInputPassword1" name="phone">
                    </div>
                
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Address (City)</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="city">
                      </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
            <div class="col-md-9">
             
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">City</th>
                    <th scope="col" colspan="2">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($data as $student)
                  <tr>
                    <th scope="row">{{ $student->id }}</th>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->phone }}</td>
                    <td>{{ $student->city }}</td>
                    <td><a href="{{ route('edit', $student->id) }}" class="btn btn-info">Edit</a></td>
                    <td><a href="{{ route('delete', $student->id) }}" class="btn btn-danger">Delete</a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>