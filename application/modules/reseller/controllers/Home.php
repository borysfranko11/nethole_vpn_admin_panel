<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Reseller_Controller {

	public function index()
	{
		$this->load->model('user_model', 'users');
		$this->mViewData['count'] = array(
			'users' => $this->users->count_all(),
		);
		$this->render('home');
	}

	public function  setting() {

    }
}
