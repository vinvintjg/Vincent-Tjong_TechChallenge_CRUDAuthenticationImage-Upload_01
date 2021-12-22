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
        return view('create');
    }

    public function createBook(Request $request){
        Book::create([
            'NamaPembeli' => $request->NamaPembeli,
            'Barang' => $request->Barang,
            'Harga' => $request->Harga,
            'Jumlah' => $request->Jumlah,
            'Tanggal' => $request->Tanggal,
            'Jam' => $request->Jam,
        ]);

        return redirect(route('getBooks'));
    }

    public function getBooks(){
        $books = Book::all();
        return view('view', ['books' => $books]);
    }

    public function getBookById($id) {
        $book = Book::find($id);
        return view('update', ['book' => $book]);
    }

    public function updateBook(Request $request, $id) {
        $book = Book::find($id);

        // $book->title = $request->title;
        // $book->author = $request->author;
        // $book->release = $request->release;
        // $book->price = $request->price;
        // $book->save();

        $book -> update([
            'NamaPembeli' => $request->NamaPembeli,
            'Barang' => $request->Barang,
            'Jumlah' => $request->Jumlah,
            'Harga' => $request->Harga,
            'Tanggal' => $request->Tanggal,
            'Jam' => $request->Jam,
        ]);

        return redirect(route('getBooks'));
    }

    public function deleteBook($id){
        Book::destroy($id);
        return redirect(route('getBooks'));
    }
}
