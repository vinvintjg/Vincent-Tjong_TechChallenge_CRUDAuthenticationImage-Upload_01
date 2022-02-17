<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Models\Book;
use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{

    public function getCreatePage() {
        $genres = Genre::all();
        return view('create',['genres'=> $genres]);
    }

    // public function getBookByGenre(Request $request, $name){
    //     $books = DB::table('books')
    //     ->join('genres','books.genreId', 'genres.id')
    //     ->select('books.name')
    //     ->where('book.genreId')
    // }

    public function createBook(BookRequest $request){
        Book::create([
            'Title' => $request->Title,
            'Author' => $request->Author,
            'Pages' => $request->Pages,
            'Year' => $request->Year,
        ]);

        return redirect(route('getBooks'));
    }

    public function searchBook(Request $request){
        if($request){
            $books = Book::where('Title', 'like', '%'.$request->cari.'%')
            ->orWhere('Author', 'LIKE', '%'.$request->cari.'%')
            ->orWhere('Pages', 'LIKE', '%'.$request->cari.'%')
            ->orWhere('Year', 'LIKE', '%'.$request->cari.'%')
            ->get();
        }else{
            $books = Book::all();
        }
        return view('view', compact('books', 'request'));
    }

    public function getBooks(){
        $books = Book::all();
        return view('view', ['books' => $books]);
    }

    public function getBookById($id) {
        $book = Book::find($id);
        return view('update', ['book' => $book]);
    }

    public function updateBook(BookRequest $request, $id) {
        $book = Book::find($id);

        // $book->title = $request->title;
        // $book->author = $request->author;
        // $book->release = $request->release;
        // $book->price = $request->price;
        // $book->save();

        $book -> update([
            'Title' => $request->Title,
            'Author' => $request->Author,
            'Year' => $request->Year,
            'Pages' => $request->Pages,
        ]);

        return redirect(route('getBooks'));
    }

    public function deleteBook($id){
        Book::destroy($id);
        return redirect(route('getBooks'));
    }
}
