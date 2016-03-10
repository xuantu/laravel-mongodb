<?php

namespace CMS\Forms\Admin;

use CMS\Base\Forms\AdminForm;


class RolesForm extends AdminForm
{
    public function buildForm()
    {
        // Add fields here...
        $this
            ->add('name', 'text', [
                'label' => trans('admin.fields.user.name')
            ])
            ->add('display_name', 'text', [
                'label' => trans('admin.fields.user.email')
            ])
            ->add('description', 'text', [
                'label' => trans('admin.fields.user.password')
            ]);
        parent::buildForm();
    }
}
