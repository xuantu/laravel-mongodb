<?php

namespace CMS\Http\Controllers\Admin;

use CMS\Base\Controllers\AdminController;
use CMS\User;
use Illuminate\Http\Request;

use CMS\Http\Requests;

class UsersController extends AdminController
{
    public function index()
    {
        return view('admin.users.index', ['users' => User::all()]);
    }

    public function edit($id)
    {
        $user = User::find($id);
        return $this->getForm($user);
    }

    public function update()
    {

    }
}
