<?php

namespace CMS\Forms\Admin;

use CMS\Base\Forms\AdminForm;


class PermissionsForm extends AdminForm
{
    public function buildForm()
    {
        // Add fields here...
        $this
            ->add('name', 'text', [
                'label' => trans('admin.fields.role.name')
            ])
            ->add('display_name', 'text', [
                'label' => trans('admin.fields.role.display_name')
            ])
            ->add('description', 'textarea', [
                'label' => trans('admin.fields.role.description')
            ]);
        parent::buildForm();
    }
}
