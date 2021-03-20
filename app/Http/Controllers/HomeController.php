<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->Home = new home();
    }

    public function home()
    {
        $data = [
            'homes' => $this->Home->allData(),
        ];

        return view('template', $data);
    }
}
