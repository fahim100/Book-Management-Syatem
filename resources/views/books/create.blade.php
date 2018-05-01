@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-9 col-lg-9 col-md-9 pull-left">

            <!-- Example row of columns -->
            <div class="row">
                <form method="post" action="{{ route('books.store') }}">
                    {{csrf_field()}}

                    <div class="form-group">
                        <label for="book-name">Name<span class="requirer">*</span> </label>
                        <input placeholder="Enter name"
                               id="company-name"
                               required
                               name="name"
                               spellcheck="false"
                               class="form-control"
                        />
                    </div>
                    <div class="form-group">
                        <label for="company-content">Description</label>
                        <textarea placeholder="Enter Description"
                                  style="resize: vertical"
                                  id="book-content"
                                  name="description"
                                  rows="5"
                                  class="form-control autosize-target text-left">
                                  </textarea>
                    </div>
                    <div class="form-group">
                        <label for="book-price">Book Price<span class="requirer">*</span> </label>
                        <input placeholder="Enter name"
                               id="book-price"
                               required
                               name="price"
                               spellcheck="false"
                               class="form-control"
                        />
                    </div>
                    <div class="form-group">
                        <label for="book-author">Author Name<span class="requirer">*</span> </label>
                        <input placeholder="Enter Author name"
                               id="author-name"
                               required
                               name="author"
                               spellcheck="false"
                               class="form-control"
                        />
                    </div>
                    <div class="form-group">
                        <label for="image">Image<span class="required">*</span> </label>
                        <input type="file"
                               required
                               name="select_image"
                               class="form-control"
                        />
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Create">
                    </div>
                </form>
            </div>
        </div>
        <div class="col-sm-3 col-sm-3 col-lg-3 pull-right">
            <div class="sidebar-module">
                <h4>Actions</h4>
                <ol class="list-unstyled">
                    <li><a href="/books">My Books</a></li>
                </ol>
            </div>


        </div>



    </div>
@endsection