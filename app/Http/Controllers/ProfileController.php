<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\HTML;
// 追記
use App\Profile;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        $cond_title = $request->cond_title;
        if ($cond_title != '') {
            // 検索されたら検索結果を取得する
            $profiles = Profile::where('title', $cond_title)->get();
        } else {
            // それ以外はすべてのニュースを取得する
            $profiles = Profile::all();
        }
        return view('profile.index', ['profiles' => $profiles, 'cond_title' => $cond_title]);
    } 
    
}
