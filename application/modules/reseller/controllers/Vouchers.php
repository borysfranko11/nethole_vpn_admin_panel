<?php
/**
 * Created by PhpStorm.
 * User: Borys
 * Date: 2/16/2018
 * Time: 10:31 PM
 */

class Vouchers extends Reseller_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_builder');
    }
}