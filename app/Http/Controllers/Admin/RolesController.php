<?php

namespace CMS\Http\Controllers\Admin;

use CMS\Base\Controllers\AdminController;
use CMS\Models\Role;
use Illuminate\Http\Request;
use CMS\Http\Requests;

class RolesController extends AdminController
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('admin.roles.index', ['roles' => Role::all()]);
    }

    /**
     * @param $id
     * @return \BladeView|bool|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $role = Role::find($id);
        return $this->getForm($role);
    }

    /**
     * @param $id
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        $role = Role::find($id);

        return $this->saveFlashRedirect($role, $request);
    }


    /**
     * @param Article $article
     * @return \BladeView|bool|\Illuminate\Contracts\View\Factory|\Illuminate\View\View|string
     */
    public function show(Role $role)
    {
        return $this->viewPath("show", $role);
    }
}
