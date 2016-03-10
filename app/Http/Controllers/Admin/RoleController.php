<?php

namespace CMS\Http\Controllers\Admin;

use CMS\Base\Controllers\AdminController;
use CMS\Models\Role;
use Illuminate\Http\Request;
use CMS\Http\Requests;
use Illuminate\Support\Facades\Input;

class RoleController extends AdminController
{
    public function index()
    {
        return view('admin.role.index', ['role' => Role::all()]);
    }

    public function edit($id)
    {
        return view('admin.role.edit', ['role' => Role::find($id)]);
    }
}