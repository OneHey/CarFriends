<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Http\Resources\Article as ArticleResource;
use Intervention\Image\ImageManagerStatic as Image;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        return ArticleResource::collection(Article::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return ArticleResource
     */
    public function store(Request $request)
    {
        $article = Article::create($request->all());
        return new ArticleResource($article);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return ArticleResource
     */
    public function show($id)
    {
        $article = Article::find($id);
        return new ArticleResource($article);
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
     * @return ArticleResource
     */
    public function update(Request $request, $id)
    {

        $article = Article::find($id);

        $currentPhoto = $article->mainpicture;

        if($request->mainpicture != $currentPhoto){
            $name = time().'.' . explode('/', explode(':', substr($request->mainpicture, 0, strpos($request->mainpicture, ';')))[1])[1];

            Image::make($request->mainpicture)->save(public_path('img/article/').$name);


            $request->merge(['mainpicture' => $name]);
            $articlePhoto = public_path('img/article/').$currentPhoto;
            if(file_exists($articlePhoto)){
                @unlink($articlePhoto);
            }
        }
        $article->update($request->all());
        return new ArticleResource($article);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return ArticleResource
     */
    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();
        return new ArticleResource($article);
    }
}
