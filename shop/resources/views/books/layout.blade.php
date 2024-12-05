<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BookStore | {{$title}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    
    <nav class="navbar bg-warning">
        <div class="container-fluid">
          <a href="{{route('books.index')}}" class="navbar-brand btn btn-light">Home</a>
          <div class="col-lg-7">
          <form class="d-flex" role="search" action="{{route('books.index')}}">
            <input class="form-control mr-sm-1"name="search" type="search" placeholder="Search book" value="{{request('search')}}">
            <button class="btn btn-primary" type="submit">Search</button>
          </form>
        </div>
        </div>
      </nav>



    <div class="container">
        @yield('page-content')
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>