<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Feed;

class FeedsController extends Controller
{
    public function index() {
        // モデル Eloquent
        $feeds = Feed::all()->toArray();
        // SELECT * FROM feeds WHERE 1 

        // Builder → get() = Collection
        // Collection → toArray() = Array

        // dd($feeds[0]['feed']);

        // views/feeds/index.blade.php
        // 上記viewファイルを呼び出す処理
        // 各テーブルと同名ディレクトリをviews以下に用意
        // その中にindex / show / create / editのviewファイルを用意するのが基本形
        return view('feeds.index', compact('feeds'));
    }

    // $idはroutes.phpで定義したパラメータの値
    // Route::get('/feeds/{id}', 'FeedsController@show');
    //                    ↑この部分と引数の$idの名前が一致していること
    public function show($id) {
        $feed = Feed::find($id)->toArray();
        // SELECT * FROM feeds WHERE id=?

        return view('feeds.show', compact('feed'));
    }
}





















