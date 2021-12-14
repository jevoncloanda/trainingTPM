<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function getCreatePage()
    {
        return view('create');
    }

    public function createBook(Request $request)
    {
        Book::create([
            'title' => $request->title,
            'author' => $request->author,
            'release' => $request->release,
            'price' => $request->price,
        ]);

        return redirect(route('getBooks'));
    }

    public function getBooks()
    {
        $books = Book::all();
        return view('view', ['books' => $books]);
    }

    public function getBookById($id)
    {
        $book = Book::find($id);
        // dd($book);
        return view('update', ['book' => $book]);
    }

    public function updateBook(Request $request, $id)
    {
        $book = Book::find($id);

        // $book->title = $request->title;
        // $book->author = $request->author;
        // $book->release = $request->release;
        // $book->price = $request->price;
        // $book->save();

        $book->update([
            'title' => $request->title,
            'author' => $request->author,
            'release' => $request->release,
            'price' => $request->price,
        ]);
    }

    public function deleteBook($id)
    {
        Book::destroy($id);
        return redirect(route('getBooks'));
    }
}
