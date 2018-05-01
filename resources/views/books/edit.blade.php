@extends('layouts.app')

@section('content')
    <div class="container">

        <!-- The justified navigation menu is meant for single line per list item.
             Multiple lines will require custom code not provided by Bootstrap. -->

        <!-- Jumbotron -->
        <div class="col-sm-9 col-lg-9 col-md-9 pull-left">

            <!-- Example row of columns -->
            <div class="row">
                <form method="post" action="{{ route('books.update',[$book -> id]) }}">
                    {{csrf_field()}}

                    <input type="hidden" name="_method" value="put">
                    <div class="form-group">
                        <label for="book-name">Name<span class="requirer">*</span> </label>
                        <input placeholder="Enter name"
                               id="company-name"
                               required
                               name="name"
                               spellcheck="false"
                               class="form-control"
                               value="{{ $book->name }}"
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
                                  {{ $book->description }}

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
                               value="{{ $book->price }}"
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
                               value="{{ $book->author }}"
                        />
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Update">
                    </div>
                </form>
            </div>
        </div>

    </div>



    </div>
@endsection