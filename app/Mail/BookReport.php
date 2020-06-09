<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Book;

class BookReport extends Mailable
{
    use Queueable, SerializesModels;

    private $book;
    private $titulo;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Book $book, $titulo)
    {
        $this->book = $book;
        $this->titulo = $titulo;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.BookReport', [
            'book' => $this->book,
            'titulo' => $this->titulo
        ]);
    }
}
