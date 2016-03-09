<?php

namespace CMS\Http\Controllers;

use CMS\Models\Role;
use Illuminate\Http\Request;

use CMS\Http\Requests;
use Illuminate\Support\Facades\Input;

class RoleController extends Controller
{
    public function index()
    {
        return view('admin.role.index', ['role' => Role::all()]);
    }

    public function edit($id)
    {
        print_r($id);die;
    }
}
