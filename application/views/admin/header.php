<div id="header" class="clearfix">
    
    <div class="info">
        <h3>Stylized Online Shop</h3>
        <h6>Admin Panel</h6>
    </div>
    <div class="menu">
            <ul>
                <li><a href="<?php echo site_url('admin/users/profile');?>">Profile (<?php echo $this->php_session->get('full_name')?>)</a></li>
                <li><a href="<?php echo site_url('admins/logout') ?>">Logout</a></li>
            </ul>
        </div>
</div>         <!--end #header-->

<div id="breadcrumbs" class="clearfix">
    <?php echo set_breadcrumb() ?>
</div>        <!--end #breadcrumbs-->
