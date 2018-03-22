<?php

namespace App\Http\Controllers;

use Request;
// use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Carbon\Carbon;
use App\Like;

class LikesController extends Controller
{
    public function like() {
        $request = Request::all();
        // dd($request);

        if ($request['action'] == 'like') {
            // いいね
            $data = ['user_id' => $request['user_id'], 'feed_id' => $request['feed_id'], 'created_at' => Carbon::now()];
            Like::create($data);
        } else {
            // 取り消し
            $like = Like::where('user_id', $request['user_id'])->where('feed_id', $request['feed_id']);
            $like->delete();
        }

        return redirect(url('feeds', [$request['feed_id']]));
    }

    // public function like(Request $request) {
    //     dd($request->all());
    // }
}




















