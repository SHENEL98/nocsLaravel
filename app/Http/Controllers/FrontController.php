<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class FrontController extends Controller
{
    public function index(): View {
        //return view('temp_layouts.template');
        return view('frontend/index/index');
    }

    public function aboutus(): View {
        return view('frontend/aboutus/index');
    }

    public function events(): View {
        return view('frontend/events/index');
    }
}
