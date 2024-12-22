<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Agent;
use App\Models\Expert;
use App\Models\Property;
use Illuminate\Http\Request;
use Inertia\Inertia;




class HomeController extends Controller
{

    public function index()
    {
        $properties = Property::orderBy('id')->limit(5)->get();

        // $agents = Agent::orderBy('name')->get();
        $agents = Agent::all();

        // $experts = Expert::orderBy('name')->limit(5)->get();
        $experts = Expert::all();
        // //  dd($agents);
        // return view('frontend.home', compact('properties', 'agents', 'experts'));

        return Inertia::render('Home', compact('properties', 'agents', 'experts'));
    }

    public function about()
    {
        return Inertia::render('About');
    }


    public function contact()
    {
        return Inertia::render('Contact');
    }
}
