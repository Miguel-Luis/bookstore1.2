<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Category;
use Illuminate\Support\Facades\DB;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts.app', function ($view) {
            $category = Category::all();
            $view->with('categories', $category);
        });

        // Estadisticas
        view()->composer('general.statistics', function($view) {
            // Cantidad categorias
            $countC = DB::table('categories')
                     ->select('id')
                     ->count();

            // Cantidad libros
            $countB = DB::table('books')
                      ->select('id')
                      ->count();

            // Cantidad autores
            $countA = DB::table('books')
                      ->distinct('book_author')
                      ->count();

            // Cantidad de libros por categoria
            $data = DB::table('categories')
                    ->select(
                    DB::raw('categories.name as category'),
                    DB::raw('count(books.category_id) as book')
                    )
                    ->join('books', 'categories.id', 'books.category_id')
                    ->groupBy('category')
                    ->get();

            $array[] = ['Category', 'Book'];

            foreach($data as $key => $value) {
                $array[++$key] = [$value->category, $value->book];
            }

            $view->with([
                'countC' => $countC,
                'countB' => $countB,
                'countA' => $countA,
                'category' => json_encode($array)
            ]);
        });
    }
}
