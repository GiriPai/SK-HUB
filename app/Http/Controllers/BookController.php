<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();
        return view('Admins.books.books',compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admins.books.create_book');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            
         if($request->hasFile('file')){
           

            $filename=$request->file('file')->getClientOriginalName();
            $path =  $request->file('file')->storeAs('public/books',$filename);
            $file = $path; 
            

            $a = new Book();
            $a->book = $request->book;
            $a->author = $request->author;
            $a->edition = $request->edition;
            $a->publication = $request->publication;
            $a->year = $request->year;
            $a->file = $file;

            $a->save();
            return redirect()->back()->with('success',"Book Uploaded to Server");
        }

        return redirect()->back()->with('fail',"Upload Failed");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $a = Book::find($id);
        $a->delete();
        return redirect()->back();
    }

    public function staff_index()
    {
        $books = Book::all();
        return view('Staffs.books',compact('books'));
        
    }
    public function student_index()
    {
        $books = Book::all();
        return view('Students.books',compact('books'));
        
    }
}
