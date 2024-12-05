@extends('books.layout',['title' => 'Home'])


@section('page-content')

    <div class="row mt-5">
        <div class="col-lg-10">

        </div>
        <div class="col-lg-2">
            <p class="text-end">
                <a href="{{route('books.create')}}" class="btn btn-primary">New Book</a>
            </p>
        </div>
    </div>
    <h1>Book List</h1>


    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Price</th>
            <th>Stock</th>
            <th>Display</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>

        @foreach ($books as $book)
            <tr>
                <td>{{$book->id}}</td>
                <td>{{$book->title}}</td>
                <td>{{$book->author}}</td>
                <td>{{$book->price}}</td>
                <td>{{$book->stock}}</td>
                <td>
                    <a href="{{route('books.show',$book->id)}}" class="btn btn-info">view</a>
                </td>
                <td>
                    <a href="{{route('books.edit',$book->id)}}" class="btn btn-warning">Edit</a>
                </td>
                <td>
                    <form method="post" action="{{route('books.destroy')}}" onsubmit="return confirm('Are you sure?')">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="id" value="{{$book->id}}">
                        <input type="submit" value="Delete" class="btn btn-danger">
                    </form>
                </td>
            </tr>
        @endforeach


    </table>

    {{$books->links()}}

@endsection
