<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public  function Index()
    {
        return view('dashboard.index');
    }
}
