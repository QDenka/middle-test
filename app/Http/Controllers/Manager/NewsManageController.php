<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsRequest;
use App\Models\Category;
use App\Models\News;
use App\Repositories\NewsRepository;
use Illuminate\Http\Request;

class NewsManageController extends Controller
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
        $news = $news->paginate(10);

        return view('manager.index', compact('news', 'categories'));
    }

    /**
     * Показывает форму создания новости
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();

        return view('manager.edit', compact('categories'));
    }

    /**
     * Сохраняет новую новость
     *
     * @param  \App\Http\Requests\NewsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsRequest $request)
    {
        $repository = new NewsRepository();
        $repository->save($request->all());

        return redirect(route('news.index'));
    }

    /**
     * Показыает страницу редактирования новости
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        $categories = Category::get();

        return view('manager.edit', compact('news', 'categories'));
    }

    /**
     * Обновляет выбранную новость
     *
     * @param  \App\Http\Requests\NewsRequest  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(NewsRequest $request, News $news)
    {
        $repository = new NewsRepository($news);
        $repository->save($request->all());

        return redirect(route('news.index'));
    }

    /**
     * Удаляет выбранную новость
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        $news->delete();
        return redirect(route('news.index'));
    }
}
