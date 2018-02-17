<!--	<div class="col-md-4">
		<?php /*echo modules::run('adminlte/widget/box_open', 'Shortcuts'); */?>
			<?php /*echo modules::run('adminlte/widget/app_btn', 'fa fa-user', 'Account', 'panel/account'); */?>
			<?php /*echo modules::run('adminlte/widget/app_btn', 'fa fa-sign-out', 'Logout', 'panel/logout'); */?>
		<?php /*echo modules::run('adminlte/widget/box_close'); */?>
	</div>

	<div class="col-md-4">
		<?php /*echo modules::run('adminlte/widget/info_box', 'yellow', $count['users'], 'Users', 'fa fa-users', 'user'); */?>
	</div>-->


    <?php echo modules::run('adminlte/widget/box_open', ''); ?>
        <div class="col-md-4">
            <ul class="list-inline text-center">
                <li>
                    <a href="#"><i class="fa fa-users fa-3x"></i></a>
                </li>
                <li class="text-left">
                    <div class="text-semibold">Total Active Users</div>
                    <div class="text-muted">500</div>
                </li>
            </ul>
        </div>
        <div class="col-md-4">
            <ul class="list-inline text-center">
                <li>
                    <a href="#"><i class="fa fa-user-plus fa-3x"></i></a>
                </li>
                <li class="text-left">
                    <div class="text-semibold">Today Transfer Vouchers</div>
                    <div class="text-muted">300</div>
                </li>
            </ul>
        </div>
        <div class="col-md-4">
            <ul class="list-inline text-center">
                <li>
                    <a href="#"><i class="fa fa-gg-circle fa-3x"></i></a>
                </li>
                <li class="text-left">
                    <div class="text-semibold">Total Transfer Vouchers</div>
                    <div class="text-muted">500</div>
                </li>
            </ul>
        </div>
    <?php echo modules::run('adminlte/widget/box_close'); ?>
