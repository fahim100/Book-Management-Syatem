<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();
        return view('books.index',['books'=>$books]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::check()){
            $book =Book::create([
                'name'=> $request ->input('name'),
                'description'=>$request ->input('description'),
                'price'=>$request ->input('price'),
                'author'=>$request ->input('author'),
            ]);

            if ($book){
                return redirect()->route('books.show',['book'=>$book->id])
                    ->with('success','Book created Successfully');
            }
        }

        return back()->withInput('errors','Problem to create Books');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        $company=Book::find($book->id);

        return view('books.show',['book'=>$book]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        $book = Book::find($book->id);
        return view('books.edit',['book'=>$book]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $bookUpdate = Book::where('id',$book->id)
            ->update([
                'name'=> $request ->input('name'),
                'description'=>$request ->input('description'),
                'price'=>$request ->input('price'),
                'author'=>$request ->input('author')
            ]);

        if ($bookUpdate){
            return redirect()->route('books.show',['book'=>$book->id])
                ->with('success','Book Updated Successfully');
        }

        //redirect data
        return back()->withInput();
    }

    public function destroy(Book $book)
    {
        $findBook = Book::find( $book->id );
        if ($findBook->delete()){
            return redirect()->route('books.index')
                ->with('success','Books deleted successfully');
        }

        return back()->withInput()->with('errors','Book could not be deleted.');
    }
}
