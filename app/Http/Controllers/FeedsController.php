<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Feed;
use Carbon\Carbon;
use App\Like;

class FeedsController extends Controller
{
    public function index() {
        // モデル Eloquent
        // $feeds = Feed::all()->toArray();
        // SELECT * FROM feeds WHERE 1
        $feeds = Feed::latest('created_at')->get()->toArray();

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

        $is_like = Like::where('user_id', \Auth::user()->id)->where('feed_id', $feed['id'])->count();
        // SELECT COUNT(*) FROM likes WHERE user_id=? AND feed_id=?
        // dd($is_like);

        return view('feeds.show', compact('feed', 'is_like'));
    }


    public function create() {
        return view('feeds.create');
    }

    public function store(Request $request) {
        // $request = new Request(); ↑は$requestをRequestクラスから生成する処理
        // Requestクラス → $_REQUESTみたいなもの

        // 送信データの配列
        $post_data = $request->all();
        
        $now = Carbon::now(); // 現在のyyyy/mm/dd hh:mm:ssを返す
        
        // INSERT用のデータを配列で作成
        $data = ['feed' => $post_data['feed'],
                 'user_id' => \Auth::user()->id,
                 'created_at' => $now];

        Feed::create($data);
        \Session::flash('create_feed', '作成しました');
        // $_SESSION['create_feed'] = '作成しました';

        // $feed = Feed::create($data);
        // $feed->save();
        // INSERT INTO feeds SET feed=?, user_id=?, created_at=NOW();

        // header()と同じようなもの
        return redirect('feeds');
    }

    public function edit($id) {
        // SELECT * FROM feeds WHERE id=?
        $feed = Feed::find($id)->toArray();

        return view('feeds.edit', compact('feed'));
    }

    public function update($id, Request $request) {
        // $request = $_POSTと同じもの
        // dd($request->feed);

        // 更新したいデータをmodelを使って取得
        $feed = Feed::find($id);
        // 新しいデータをセットしてupdate()実行
        $data = ['feed' => $request->feed];
        $feed->update($data);

        // リダイレクト処理（headerと同じもの）
        return redirect(url('feeds', [$feed['id']]));
    }

    public function destroy($id) {
        // DELETE FROM feeds WHERE id=?

        // 削除したいデータをmodelを使って取得
        $feed = Feed::find($id);
        // delete()を実行
        $feed->delete();
        // \Session::flash('キー', '表示メッセージ');
        \Session::flash('delete_feed', '削除しました');

        return redirect('feeds');
    }

    public function my_feeds() {
        // SELECT * FROM feeds WHERE user_id=? ORDER BY updated_at DESC
        $user = \Auth::user();
        $feeds = $user->feeds()->latest('updated_at')->get()->toArray();
        // dd($feeds->get()->toArray());

        return view('feeds.my_feeds', compact('feeds'));
    }
}





















