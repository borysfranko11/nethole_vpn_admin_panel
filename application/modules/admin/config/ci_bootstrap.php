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
	'site_name' => 'VPN Admin Panel',

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
			'assets/dist/admin/app.min.js'
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
			'assets/dist/admin/style.css'
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
        'reseller' => array(
            'name'		=> 'Resellers',
            'url'		=> 'reseller',
            'icon'		=> 'fa fa-share',
            'children'  => array(
                'Add Reseller'		=> 'reseller/add_reseller',
                'View Reseller'		=> 'reseller/view_reseller',
                'All Resellers'		=> 'reseller/all_resellers',
            )
        ),
		'user' => array(
			'name'		=> 'Users',
			'url'		=> 'user',
			'icon'		=> 'fa fa-users',
			'children'  => array(
                'Create User'		=> 'user/create_user',
				'All Users'			=> 'user/all_users',
                'Users'		    	=> 'user/users',
                'Expire User'		=> 'user/expire_user',
                'Blocked User'		=> 'user/blocked_user',
				//'User Groups'	=> 'user/group',
			)
		),
        'vouchers' => array(
            'name'		=> 'Vouchers',
            'url'		=> 'vouchers',
            'icon'		=> 'fa fa-flag',
            'children'  => array(
                'Create Voucher'		=> 'vouchers/create_voucher',
                'View Vouchers'			=> 'vouchers/view_vouchers',
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
        'announcement' => array(
            'name'		=> 'Announcement',
            'url'		=> 'announcement',
            'icon'		=> 'fa fa-microphone',
            'children'  => array(
                'Add Announcement'		=> 'announcement/add_anouncement',
                'View Announcement'		=> 'announcement/view_anouncement',
            )
        ),
/*		'panel' => array(
			'name'		=> 'Admin Panel',
			'url'		=> 'panel',
			'icon'		=> 'fa fa-cog',
			'children'  => array(
				'Admin Users'			=> 'panel/admin_user',
				'Create Admin User'		=> 'panel/admin_user_create',
				'Admin User Groups'		=> 'panel/admin_user_group',
			)
		),
		'util' => array(
			'name'		=> 'Utilities',
			'url'		=> 'util',
			'icon'		=> 'fa fa-cogs',
			'children'  => array(
				'Database Versions'		=> 'util/list_db',
			)
		),*/
        'setting' => array(
            'name'		=> 'Setting',
            'url'		=> 'setting/vpnsetting',
            'icon'		=> 'fa fa-gear',
        ),
		'logout' => array(
			'name'		=> 'Sign Out',
			'url'		=> 'panel/logout',
			'icon'		=> 'fa fa-sign-out',
		)
	),

	// Login page
	'login_url' => 'admin/login',

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
			'webmaster'	=> 'skin-red',
			'admin'		=> 'skin-purple',
			'manager'	=> 'skin-black',
			'staff'		=> 'skin-blue',
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