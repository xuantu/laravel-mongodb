<?php

namespace CMS\Http\Controllers\Admin;

use CMS\Base\Controllers\AdminController;
use CMS\Models\Permission;
use Illuminate\Http\Request;

use CMS\Http\Requests;

class PermissionsController extends AdminController
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('admin.permissions.index', ['permissions' => Permission::all()]);
    }

    /**
     * @param $id
     * @return \BladeView|bool|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $permission = Permission::find($id);
        return $this->getForm($permission);
    }


    /**
     * @param $id
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        $permission = Permission::find($id);

        return $this->saveFlashRedirect($permission, $request);
    }

    /**
     * @param Permission $permission
     * @return \BladeView|bool|\Illuminate\Contracts\View\Factory|\Illuminate\View\View|string
     */
    public function show(Permission $permission)
    {
        return $this->viewPath("show", $permission);
    }


    /**
     * @return \CMS\Base\Controllers\Response
     */
    public function create()
    {
        return parent::create(); // TODO: Change the autogenerated stub
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        return $this->createFlashRedirect(Permission::class, $request);
    }
}
