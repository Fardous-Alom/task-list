<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function user(){
        return 'this is user controller';
    }

    function admin() {
        return 'this us admin function in user controller';
    }

    // function userName($name) {
    //     return 'User name is' . $name;
    // }

    function userName($nam) {
        return view('user',['names'=>$nam]);
    }
}
