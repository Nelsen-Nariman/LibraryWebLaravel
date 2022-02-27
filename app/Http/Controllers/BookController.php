<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Illuminate\Support\Facades\Validator;

class BookController extends Controller
{
    
    //
    public function createBook(Request $request){
        $validator = Validator::make($request->all(), [
            'judulBuku' => 'required|min:5|max:20',
            'penulisBuku' => 'required|min:5|max:20',
            'jumlahHalaman' => 'required|numeric|min:1',
            'tahunTerbit' => 'required|integer|between:2000,2021'
        ]);

        if($validator->fails()){
            return redirect('/')->with('alert', $validator->messages()->first());
        }
        Book::create([
            'Judul_buku' => $request->judulBuku,
            'Penulis_buku' => $request->penulisBuku,
            'Jumlah_halaman' => $request->jumlahHalaman,
            'Tahun_terbit' => $request->tahunTerbit
        ]);

        return redirect('/');
    }

    public function readBook(){
        $books = Book::all();
        return view('viewBook', compact('books'));
    }

    public function updateBook($id){
        $book = Book::findorFail($id);

        return view('updateBook', compact('book'));
    }

    public function updatingBook(Request $request, $id){

        $validator = Validator::make($request->all(), [
            'judulBuku' => 'required|min:5|max:20',
            'penulisBuku' => 'required|min:5|max:20',
            'jumlahHalaman' => 'required|numeric|min:1',
            'tahunTerbit' => 'required|integer|between:2000,2021'
        ]);

        if($validator->fails()){
            return redirect('/update/1')->with('alert', $validator->messages()->first());
        }

        Book::findOrFail($id)->update([
            'Judul_buku' => $request->judulBuku,
            'Penulis_buku' => $request->penulisBuku,
            'Jumlah_halaman' => $request->jumlahHalaman,
            'Tahun_terbit' => $request->tahunTerbit
        ]);

        return redirect('/read');
    }

    public function deleteBook($id){
        Book::destroy($id);

        return back();
    }

}
