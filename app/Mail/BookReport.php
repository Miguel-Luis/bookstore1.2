<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Book;
use Carbon\Carbon;

class BookReport extends Mailable
{
    use Queueable, SerializesModels;

    private $book;
    private $titulo;
    private $date;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Book $book, $titulo, Carbon $date)
    {
        $this->book = $book;
        $this->titulo = $titulo;
        $this->date = $date;
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
            'titulo' => $this->titulo,
            'date' => $this->date
        ]);
    }
}
