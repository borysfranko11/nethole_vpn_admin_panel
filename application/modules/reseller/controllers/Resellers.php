<?php
/**
 * Created by PhpStorm.
 * User: Borys
 * Date: 2/16/2018
 * Time: 10:29 PM
 */

class Resellers extends Reseller_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_builder');
    }

    function  add_reseller() {
        $this->render('resellers/add_reseller');
    }

    function  view_reseller() {

        $crud = $this->generate_crud('reseller');
        $crud->columns('id', 'username', 'password', 'email', 'phone', 'users','due','status','addtime');

        $crud->unset_add();
        $crud->unset_export();
        $crud->unset_print();

        $this->mPageTitle = 'View Reseller';
        $this->render_reseller_crud();

    }

    function  all_resellers() {

        $crud = $this->generate_crud('reseller');
        $crud->columns('id', 'username', 'password', 'email', 'phone', 'users','due','status','addtime');

        $crud->unset_add();
        $crud->unset_export();
        $crud->unset_print();

        $this->mPageTitle = 'All Resellers';
        $this->render_reseller_crud();
    }

    function render_reseller_crud() {
        // logic specific for Grocery CRUD only
        $crud_obj_name = strtolower(get_class($this->mCrud));
        if ($crud_obj_name==='grocery_crud')
        {
            $this->mCrud->unset_fields($this->mCrudUnsetFields);
        }

        // render CRUD
        $crud_data = $this->mCrud->render();

        // append scripts
        $this->add_stylesheet($crud_data->css_files, FALSE);
        $this->add_script($crud_data->js_files, TRUE, 'head');

        // display view
        $this->mViewData['crud_output'] = $crud_data->output;
        $this->render('resellers/view_reseller');
    }
}