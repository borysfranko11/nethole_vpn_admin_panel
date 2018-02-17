<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| CI Bootstrap 3 Configuration
| -------------------------------------------------------------------------
| This file lets you define default values to be passed into views 
| when calling MY_Controller's render() function. 
| 
| See example and detailed explanation from:
| 	/application/config/ci_bootstrap_example.php
*/

$config['ci_bootstrap'] = array(

	// Site name
	'site_name' => 'VPN Client Panel',

	// Default page title prefix
	'page_title_prefix' => '',

	// Default page title
	'page_title' => '',

	// Default meta data
	'meta_data'	=> array(
		'author'		=> '',
		'description'	=> '',
		'keywords'		=> ''
	),
	
	// Default scripts to embed at page head or end
	'scripts' => array(
		'head'	=> array(
			'assets/dist/admin/adminlte.min.js',
			'assets/dist/admin/lib.min.js',
			'assets/dist/admin/app.min.js',
            'assets/dist/reseller/txttype.js'
		),
		'foot'	=> array(
		),
	),

	// Default stylesheets to embed at page head
	'stylesheets' => array(
		'screen' => array(
			'assets/dist/admin/adminlte.min.css',
			'assets/dist/admin/lib.min.css',
			'assets/dist/admin/app.min.css',
			'assets/dist/admin/style.css',
			'assets/dist/reseller/style.css'
		)
	),

	// Default CSS class for <body> tag
	'body_class' => '',
	
	// Multilingual settings
	'languages' => array(
	),

	// Menu items
	'menu' => array(
		'home' => array(
			'name'		=> 'Dashboard',
			'url'		=> '',
			'icon'		=> 'fa fa-home',
		),
		'user' => array(
			'name'		=> 'Users',
			'url'		=> 'user',
			'icon'		=> 'fa fa-users',
			'children'  => array(
                'Manage User'		=> 'user/manage_user',
				'Manage Resellers'			=> 'user/manage_resellers',
                'Add Reseller'		    	=> 'user/add_reseller',
                'Add Sub Reseller'		=> 'user/add_sub_reseller',
                'Blocked User'		=> 'user/blocked_user',
				//'User Groups'	=> 'user/group',
			)
		),
        'transfer' => array(
            'name'		=> 'Transfer',
            'url'		=> 'transfer',
            'icon'		=> 'fa fa-exchange',
            'children'  => array(
                'Transfer User'		=> 'transfer/transfer_user',
                'Transfer Voucher'	=> 'transfer/transfer_voucher',
            )
        ),
        'vouchers' => array(
            'name'		=> 'Voucher Management',
            'url'		=> 'vouchers',
            'icon'		=> 'fa fa-key',
            'children'  => array(
                'Manage Voucher'		=> 'vouchers/manage_voucher',
                'Used Voucher'		    => 'vouchers/used_voucher',
                'Unused Voucher'	    => 'vouchers/used_voucher',
                'Quick Apply'		    => 'vouchers/quick_appy',
                'Apply Voucher in Bulk'	=> 'vouchers/apply_voucher_in_bulk',
                'Apply Voucher'			=> 'vouchers/apply_voucher',
            )
        ),
        'Reports' => array(
            'name'		=> 'Reports',
            'url'		=> 'reports',
            'icon'		=> 'fa fa-clipboard',
            'children'  => array(
                'Received Vouchers'		=> 'reports/received_vouchers',
                'Transfered Vouchers'		=> 'reports/transfered_vouchers',
            )
        ),
        'verifyunusedcode' => array(
            'name'		=> 'Verify Unused Code',
            'url'		=> 'setting/verifyunusedcode',
            'icon'		=> 'fa fa-search',
        ),
        'changepassword' => array(
            'name'		=> 'Change Password',
            'url'		=> 'setting/changepassword',
            'icon'		=> 'fa fa-cog',
        ),
		'logout' => array(
			'name'		=> 'Sign Out',
			'url'		=> 'panel/logout',
			'icon'		=> 'fa fa-sign-out',
		)
	),

	// Login page
	'login_url' => 'reseller/login',

	// Restricted pages
	'page_auth' => array(
	    'reseller/add_reseller'     => array('webmaster','admin','manager'),
        'reseller/view_reseller'     => array('webmaster','admin','manager'),
        'reseller/all_resellers'     => array('webmaster','admin','manager'),

		'user/create'				=> array('webmaster', 'admin', 'manager'),
		'user/group'				=> array('webmaster', 'admin', 'manager'),
		'panel'						=> array('webmaster'),
		'panel/admin_user'			=> array('webmaster'),
		'panel/admin_user_create'	=> array('webmaster'),
		'panel/admin_user_group'	=> array('webmaster'),
		'util'						=> array('webmaster'),
		'util/list_db'				=> array('webmaster'),
		'util/backup_db'			=> array('webmaster'),
		'util/restore_db'			=> array('webmaster'),
		'util/remove_db'			=> array('webmaster'),
	),

	// AdminLTE settings
	'adminlte' => array(
		'body_class' => array(
			'admin'		=> 'skin-purple',
			'manager'	=> 'skin-black',
			'staff'		=> 'skin-blue',
            'webmaster'	=> 'skin-red',
		)
	),

	// Useful links to display at bottom of sidemenu
	'useful_links' => array(
		array(
			'auth'		=> array('webmaster', 'admin', 'manager', 'staff'),
			'name'		=> 'Frontend Website',
			'url'		=> '',
			'target'	=> '_blank',
			'color'		=> 'text-aqua'
		),
		array(
			'auth'		=> array('webmaster', 'admin'),
			'name'		=> 'API Site',
			'url'		=> 'api',
			'target'	=> '_blank',
			'color'		=> 'text-orange'
		),
		array(
			'auth'		=> array('webmaster', 'admin', 'manager', 'staff'),
			'name'		=> 'Github Repo',
			'url'		=> CI_BOOTSTRAP_REPO,
			'target'	=> '_blank',
			'color'		=> 'text-green'
		),
	),

	// Debug tools
	'debug' => array(
		'view_data'	=> FALSE,
		'profiler'	=> FALSE
	),
);

/*
| -------------------------------------------------------------------------
| Override values from /application/config/config.php
| -------------------------------------------------------------------------
*/
$config['sess_cookie_name'] = 'ci_session_admin';