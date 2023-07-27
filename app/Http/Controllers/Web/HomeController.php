<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Bien;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index()
    {
        $biens = Bien::limit(4)->get();
        return view('web.welcome', ['biens' => $biens]);
    }
}
