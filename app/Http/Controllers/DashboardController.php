<?php

namespace CMS\Http\Controllers;

use Illuminate\Http\Request;

use CMS\Http\Requests;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.index');
    }
}
