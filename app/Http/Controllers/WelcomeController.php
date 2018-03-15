<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    public function index() {
        return 'Hello Laravel';
    }

    public function greeting() {
        // 変数
        $name = ['hoge', 'fuga', 'moge'];
        dd($name); // dump and dieの略
        // var_dump()を進化させた関数
        // die()関数も含む（dd()関数が読み込まれたタイミングでそれ以下の処理を終了する）

        // 処理

        // view()関数
        // viewsディレクトリ内にある同名ファイルを参照する
        return view('greeting');
    }

    public function contact() {
        return view('contact');
    }

}









