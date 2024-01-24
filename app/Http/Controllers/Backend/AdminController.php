<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('backend.dashboard');
    }
    public function students()
    {
        return view('backend.students');
    }
    public function books()
    {
        return view('backend.books');
    }
    public function addNews()
    {
        return view('backend.add-news');
    }
    public function addImageNews()
    {
        return view('backend.add-image-news');
    }
    
}
