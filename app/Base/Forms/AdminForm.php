<?php
/**
 * Created by PhpStorm.
 * User: xuantu
 * Date: 3/10/16
 * Time: 13:58
 */

namespace CMS\Base\Forms;


use Kris\LaravelFormBuilder\Form;

abstract class AdminForm extends Form
{

    public function buildForm()
    {
        $this->addButtons();
    }

    protected function addButtons()
    {
        $this
            ->add('save', 'submit', [
                'label' => trans('admin.fields.save'),
                'attr' => ['class' => 'btn btn-primary']
            ])
            ->add('clear', 'reset', [
                'label' => trans('admin.fields.reset'),
                'attr' => ['class' => 'btn btn-warning']
            ]);
    }
}