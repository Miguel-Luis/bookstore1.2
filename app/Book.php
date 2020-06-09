<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;
use App\Mail\BookReport;

class Book extends Model
{
    protected $fillable = ['book_name', 'book_author', 'book_description', 'category_id', 'book_image', 'created_at', 'updated_at'];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function sendEmail(Book $book, $titulo) {
        Mail::to('luis.380171120858@ucaldas.edu.co')
        ->send(new BookReport($book, $titulo));
    }
}
