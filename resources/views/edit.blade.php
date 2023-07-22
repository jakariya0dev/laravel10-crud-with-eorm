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
            <div class="col-md-6">
            
                <form method="POST" action="{{ route('update', $data->id ) }}">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Student name</label>
                        <input value="{{ $data->name }}" type="text" class="form-control" id="exampleInputPassword1" name="name">
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input value="{{ $data->email }}" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>

                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Phone number</label>
                      <input value="{{ $data->phone }}" type="text" class="form-control" id="exampleInputPassword1" name="phone">
                    </div>
                
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Address (City)</label>
                        <input value="{{ $data->city }}" type="text" class="form-control" id="exampleInputPassword1" name="city">
                      </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
             
        
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>