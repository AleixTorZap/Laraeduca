<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Post;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function index()
    {
        $usersCount = User::count(); // Obtiene la cantidad total de usuarios
        $postCount = Post::count(); // Obtiene la cantidad total de posts
        return view('admin.index',  [ 'usersCount' => $usersCount] , [ 'postCount' => $postCount]);
    }

}
