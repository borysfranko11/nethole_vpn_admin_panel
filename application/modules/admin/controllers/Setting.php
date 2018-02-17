<?php
/**
 * Created by PhpStorm.
 * User: Borys
 * Date: 2/16/2018
 * Time: 10:34 PM
 */

class Setting extends Admin_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_builder');
    }

    public function vpnsetting() {
        $this->render('setting/vpnsetting');
    }
}