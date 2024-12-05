@extends('books.layout',['title' => 'New Book'])


@section('page-content')


<legend>Create New Book</legend>

<form method="post" action="{{route('books.update')}}">
    @csrf

    <input type="hidden" name="id" value="{{$book->id}}">

      <div class="mb-3">
        <label class="form-label">Title</label>
        <input type="text" class="form-control" placeholder="Book title" name="title" value="{{old('title',$book->title)}}">
        @error('title')
          <div class="text-danger">{{$message}}</div>
        @enderror
      </div>
      
      <div class="mb-3">
        <label class="form-label">Author</label>
        <input type="text" class="form-control" placeholder="Book Author" name="author" value="{{old('author',$book->author)}}">
        @error('author')
          <div class="text-danger">{{$message}}</div>
        @enderror
      </div>
      
      <div class="mb-3">
        <label class="form-label">ISBN</label>
        <input type="text" class="form-control" placeholder="isbn number" name="isbn" value="{{old('isbn',$book->isbn)}}">
        @error('isbn')
          <div class="text-danger">{{$message}}</div>
        @enderror
      </div>
      
      <div class="mb-3">
        <label class="form-label">Price</label>
        <input type="text" class="form-control" placeholder="price" name="price" value="{{old('price',$book->price)}}">
        @error('price')
          <div class="text-danger">{{$message}}</div>
        @enderror
      </div>
      
      <div class="mb-3">
        <label class="form-label">Stock</label>
        <input type="text" class="form-control" placeholder=" stock" name="stock" value="{{old('stock',$book->stock)}}">
        @error('stock')
          <div class="text-danger">{{$message}}</div>
        @enderror
      </div>
      
      <br>
      <div class="mb-3">
       <button type="submit" class="btn btn-primary">Submit</button>
       <a href="{{route('books.index')}}" class="btn btn-danger">Back</a>
      </div>

</form>



@endsection