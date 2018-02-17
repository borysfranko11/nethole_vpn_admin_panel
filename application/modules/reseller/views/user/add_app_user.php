<?php
/**
 * Created by PhpStorm.
 * User: Borys
 * Date: 2/16/2018
 * Time: 11:53 PM
 */

echo modules::run('adminlte/widget/box_open', ''); ?>
    <div class="col-md-6 add_reseller">
        <ul >
            <li class="form-group">
                <label for="username">Username* </label>
                <input type="text" class="form-control"/>
            </li>
        </ul>
    </div>
    <div class="col-md-6 add_reseller">
        <ul>
            <li class="form-group">
                <label for="username">No. of Users* </label>
                <input type="text" class="form-control"/>
            </li>
        </ul>
    </div>
    <div class="clearfix"></div>
    <div class="action_btns" style="float: right">
        <button class="btn btn-default">Back</button>
        <button class="btn btn-primary">Submit  <i class="fa fa-arrow-right"></i></button>
    </div>
    </div>

<?php echo modules::run('adminlte/widget/box_close'); ?>