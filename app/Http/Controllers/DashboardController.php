<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{

    /**
     * DashboardController constructor.
     */
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public  function Index()
    {
        return view('dashboard.index');
    }
}
