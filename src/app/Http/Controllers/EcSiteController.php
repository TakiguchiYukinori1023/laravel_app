<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EcSiteController extends Controller
{
    public function topPage()
    {
        return view('/top');
    }

    public function search()
    {
        echo '赤さん';die();
    }

    public function myPage()
    {
        $user = Auth::id();
        return view('/mypage');
    }
}
