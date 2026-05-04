<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tag; // Обязательно добавьте этот импорт

class MainController extends Controller
{
    public function index()
    {
        $tag = new Tag();
        $tag->title = 'Привет мир!';
        $tag->save();

        return view('admin.index');
    }
}
