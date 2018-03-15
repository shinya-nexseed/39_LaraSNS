<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function about() {
        $data = ['first_name'=>'Shinya', 'last_name'=>'Hirai'];

        // compact()関数
        // カンマ区切りでviewに渡したい変数名を記述する
        // ※変数名は$抜きの文字列で渡すこと
        return view('pages.about', compact('data'));
    }

    public function contact() {
        return view('pages.contact');
    }
}






