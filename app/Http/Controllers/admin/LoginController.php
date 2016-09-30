<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    //验证用户数据是否符合后台登陆
    public function checkUser(Request $r)
    {
        return dd($r->all());
    }
}
