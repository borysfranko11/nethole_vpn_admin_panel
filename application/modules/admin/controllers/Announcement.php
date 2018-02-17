<?php
/**
 * Created by PhpStorm.
 * User: Borys
 * Date: 2/16/2018
 * Time: 10:33 PM
 */

class Announcement extends Admin_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_builder');
    }
}