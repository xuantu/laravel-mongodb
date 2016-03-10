<?php

namespace CMS\Http\Controllers\Admin;

use CMS\Base\Controllers\AdminController;
use Illuminate\Http\Request;

use CMS\Http\Requests;

class DashboardController extends AdminController
{
    public function index()
    {
        return view('admin.dashboard.index');
    }
}
