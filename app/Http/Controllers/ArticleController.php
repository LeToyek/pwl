<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use PDF;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Article::all();
        return view('article.index', [
            "data" => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("article.create_article");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        if ($request->file('image')) {
            # code...
            $image_name = $request->file('image')->store('images', 'public');
        }
        Article::create([
            'title' => $request->title,
            'author' => $request->author,
            'content' => $request->content,
            'featured_image' => $image_name,
            'category' => $request->category,
            'tahun_terbit' => $request->tahun_terbit,
        ]);
        return 'Artikel berhasil ditampilkan';
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
        
        $article = Article::find($id);
        return view('article.edit', ['article' => $article]);
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
        
        $article = Article::find($id);

        $article->title = $request->title;
        $article->content = $request->content;
        $article->author = $request->author;
        $article->category = $request->category;
        $article->tahun_terbit = $request->tahun_terbit;

        if ($article->featured_image && file_exists(storage_path('app/public/' . $article->featured_image))) {
            \Storage::delete('public/' . $article->featured_image);
        }
        $image_name = $request->file('image')->store('images', 'public');
        $article->featured_image = $image_name;

        $article->save();
        return 'Artikel berhasil diubah';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function cetak_pdf()
    {
        $articles = Article::all();
        $pdf = PDF::loadview('article.article_pdf', ['articles' => $articles]);
        return $pdf->stream();
    }
}
