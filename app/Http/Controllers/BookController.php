<?php

namespace App\Http\Controllers;

use App\Book;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $book = DB::table('categories')
                ->select('books.id', 'books.book_name', 'books.book_author', 'books.book_description', 'categories.name', 'books.book_image')
                ->join('books', 'categories.id', 'books.category_id')
                ->orderBy('books.book_name')
                ->get();

        return view('book.index', [
            'books' => $book
        ]);
    }

    public function creater() {
        return view('book.create', [
            'category' => 0,
            'categories' => Category::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Category $category)
    {
        $categories = Category::all();
        $id = $category->id;

        return view('book.create', [
            'category' => $id,
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('image')) {
            $file = $request->file('image');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $name);
        }

        $book = new Book();
        $book->book_name = $request->post('name');
        $book->book_author = $request->post('author');
        $book->book_description = $request->post('description');
        $book->category_id = $request->post('category');
        $book->book_image = $name;

        $book->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        $book = DB::table('categories')
                ->select('books.book_name', 'books.book_author', 'books.book_description', 'categories.name', 'categories.id', 'books.book_image')
                ->join('books', 'categories.id', 'books.category_id')
                ->where('books.id', '=', $book->id)
                ->get();

        return view('book.show', [
            'book' => $book
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        $categories = Category::all();
        $book = Book::find($book->id);

        return view('book.edit', [
            'book' => $book,
            'categories' => $categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        $book->fill($request->except('image'));

        if($request->hasFile('image')) {
            $file = $request->file('image');
            $name = time().$file->getClientOriginalName();
            $book->book_image = $name;
            $file->move(public_path().'/images/', $name);
        }

        $book->save();

        return redirect('/category/show/tables/'.$book->category_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $id = $request->post('book_id');
        $book = Book::find($id);

        $file_path = public_path().'/images/'.$book->book_image;
        \File::delete($file_path);

        $book->delete();
        return back();
    }
}
