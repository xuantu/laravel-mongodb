<?php

namespace CMS\Http\Controllers\Admin;

use CMS\Base\Controllers\AdminController;
use CMS\Models\Role;
use Illuminate\Http\Request;
use CMS\Http\Requests;
use Illuminate\Support\Facades\Input;

class RolesController extends AdminController
{
    public function index()
    {
        return view('admin.roles.index', ['roles' => Role::all()]);
    }

    public function edit($id)
    {
        $role = Role::find($id);
        $this->getForm($role);
    }
}
