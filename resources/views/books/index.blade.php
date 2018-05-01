@extends('layouts.app')

@section('content')
    <div class="container">
        <div class=" col-md-6 col-lg-6 col-lg-offset-3">
            <div class="panel panel-primary">
                <div class="panel-heading">Book<a class="btn btn-danger pull-right btn-sm" href="/books/create">Create new books</a></div>


                <div class="panel-body">
                    <ul class="list-group">
                        @foreach($books as $book)
                            <li class="list-group-item">
                                <a href="/books/{{$book->id}}" >{{$book->name}}</a>
                                <a href="" onclick="
                                            var result = confirm('Are you sure want to delete this company?');
                                                if (result){
                                                    event.preventDefault();
                                                    document.getElementById('delete-form').submit();
                                                }
                                            " class="pull-right btn-danger btn btn-sm">Delete</a>
                                <form id="delete-form" action="{{route('books.destroy',[$book->id])}}"
                                      method="POST" style="display: none;">
                                    <input type="hidden" name="_method" value="delete">
                                    {{csrf_field()}}
                                </form>
                                <a href="/books/{{ $book->id }}/edit" class="pull-right btn-primary btn btn-sm" >Edit</a>
                            </li>
                        @endforeach
                    </ul>
                </div>

            </div>
        </div>
    </div>
@endsection