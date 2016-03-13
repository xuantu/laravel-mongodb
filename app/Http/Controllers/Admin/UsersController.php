<?php

namespace CMS\Http\Controllers\Admin;

use CMS\Base\Controllers\AdminController;
use CMS\User;
use Illuminate\Http\Request;

use CMS\Http\Requests;

class UsersController extends AdminController
{
    private $imageColumn = "avatar";
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('admin.users.index', ['users' => User::all()]);
    }

    /**
     * @param $id
     * @return \BladeView|bool|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $user = User::find($id);
        return $this->getForm($user);
    }

    /**
     * @param $id
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        $user = User::find($id);
        return $this->saveFlashRedirect($user, $request, $this->imageColumn);
    }
}
