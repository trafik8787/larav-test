<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\ArticleRequest;
use Faker\Provider\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Laracasts\Flash\Flash;

class ArticleController extends Controller
{


    public function __construct () {
        $this->middleware('articleGuest', ['only' => ['create', 'edit']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        //dd();
        $data = array();
        $data['articles'] = Article::all();

        return view('pages.article', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create_article', ['metod' => 'POST']);
    }


    /**
     * @param ArticleRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(ArticleRequest $request)
    {
        $file = $request->file('image');
        //$file->move('/home/vitalik/laravel-site2/www/public/upload/image');
        //dd($file);

        $filename = uniqid('img_', false).'.jpg';

        \Intervention\Image\Facades\Image::make($file)->resize(700, 480)->save('/home/vitalik/laravel-site2/www/public/upload/image/'.$filename, 60);
        \Intervention\Image\Facades\Image::make($file)->resize(300, 200)->save('/home/vitalik/laravel-site2/www/public/upload/image/pre/'.$filename, 60);

        $article = new Article();
        $article->title = $request->title;
        $article->description = $request->description;
        $article->image = $filename;
        $article->save();

        flash('Все ок', 'success');

        return redirect('/articles');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['item_article'] = \App\Article::findOrFail($id);
        //dd($id);
        return view('pages.article', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $article = Article::findOrFail($id);

        return view('pages.edit_article', compact('article'));
    }


    /**
     * @param ArticleRequest $request
     * @param Article $article
     */
    public function update(ArticleRequest $request, $id)
    {
        $model = Article::findOrFail($id);
        $model->update();
        return redirect('/articles');
    }


    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {

        $model = Article::find($id);
        $filename = '/home/vitalik/laravel-site2/www/public/upload/image/'.$model->image;
        if (File::exists($filename)) {
            File::delete($filename);
        }
        $model->delete();

        return redirect('/articles');
    }
}
