<?php

namespace App\Http\Controllers\api;

use App\Models\Categorie;
use App\Models\Content;
use App\Http\Controllers\Controller;
use App\Http\Resources\AssetCollection;
use App\Http\Resources\AssetResource;
use App\Models\Assets;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       /* $contents = collect();
        $assets = Categorie::where('name','LIKE','com_content.article.%')->get();
        foreach ($assets as $asset){
            $contents->push(Content::where('asset_id',$asset['id'])->get());
        }
        return response()->json($contents); */
        $assets = Assets::where('name','LIKE','com_content.article.%')->get();
        return new AssetCollection($assets);
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
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $content = Content::where('id',$id)->get();
        return response()->json($content);
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
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
}
