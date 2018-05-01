@extends('layouts.app')

@section('content')
    <div class="container">
<div class="col-sm-9 col-lg-9 col-md-9 pull-left">
    {{--<div class="jumbotron">
        <h1>{{$book->name }}</h1>
        <p class="lead">{{$book->description}}</p>

    </div>--}}

    <!-- Example row of columns -->

    <div class="panel panel-primary">
        <div class="panel-heading">Book Name</div>
        <div class="panel-body">
            {{$book->name }}
        </div>
    </div>

    <div class="panel panel-primary">
        <div class="panel-heading">Book Description</div>
        <div class="panel-body">
            {{$book->description}}
        </div>
    </div>

    <div class="panel panel-primary">
        <div class="panel-heading">Price of the book</div>
        <div class="panel-body">
            {{$book->price }}
        </div>
    </div>

    <div class="panel panel-primary">
        <div class="panel-heading">Author of the book</div>
        <div class="panel-body">
            {{$book->author }}
        </div>
    </div>

</div>
    </div>
@endsection