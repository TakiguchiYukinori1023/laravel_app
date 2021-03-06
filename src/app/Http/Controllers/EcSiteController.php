<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

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
        $loginUserId = Auth::id();
        $loginUser = User::find($loginUserId);
        return view('/mypage', ['loginUser' => $loginUser]);
    }

    public function getCartInfo()
    {
        $loginUserId = Auth::id();
    }
}
