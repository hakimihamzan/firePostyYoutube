<?php

namespace App\Http\Controllers;

use App\Mail\PostLiked;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class DashboardController extends Controller
{
    // if you are authenticated, you can access the dashboard, otherwise redirect to login
    public function __construct()
    {
        $this->middleware(['auth']);
    }


    public function index()
    {
        return view('dashboard');
    }
}
