<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Показывает список новостей
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $news = News::latest();
        $categories = Category::get();

        if ($request->get('category_id')) {
            $news = $news->where('category_id', $request->get('category_id'));
        }

        $news = $news->paginate(10);

        return view('news.index', compact('news', 'categories'));
    }


    /**
     * Показывает информацию по определенной новости
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        return view('news.show', compact('news'));
    }
}
