<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Carbon\Carbon;

class FrontController extends Controller
{
    public function index(): View {
        //return view('temp_layouts.template');
        //return view('frontend/index/index');
        
        $currentDateTime = Carbon::now();
        $launchDateTime = Carbon::create(2024, 2, 17, 17, 05, 0); // Target launch date and time
        $timeRemaining = $launchDateTime->diffInSeconds($currentDateTime);

        //dd($currentDateTime);

        return view('frontend.index.index', compact('timeRemaining','launchDateTime'));
    }

    public function aboutus(): View {
        return view('frontend/aboutus/index');
    }

    public function contactus(): View {
        return view('frontend/contactus/index');
    }


    public function events(): View {
        return view('frontend/events/index');
    }

    public function event_1(): View {
        return view('frontend/events/event_1');
    }
    public function event_2(): View {
        return view('frontend/events/event_2');
    }

    public function test(): View {
        return view('frontend/test');
    }
    public function Orientation():View{
        return view('frontend/orientation/index');
    }
}
