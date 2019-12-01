<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Gets user data about his vehicles and violations
     * 
     * @return $data
     */
    public function getData() {
        $vehicles = Auth::user()->vehicles;
        $violations = Auth::user()->violations;
        $data = [
            'vehicles' => $vehicles,
            'violations' => $violations,
        ];

        return $data;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = $this->getData();
        
        // dd($data);


        return view('home')->with('data', $data);
    }
}
