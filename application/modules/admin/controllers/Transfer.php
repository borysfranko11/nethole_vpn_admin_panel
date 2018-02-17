<?php
/**
 * Created by PhpStorm.
 * User: Borys
 * Date: 2/16/2018
 * Time: 10:32 PM
 */

class Transfer extends Admin_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_builder');
    }
}