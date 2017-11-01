
<div id="side_menu">
    <div class="row">
        <h6><a href="#" id="menu-toggle1">Pages</a></h6>

        <div id="menu_list1">
            <ul>
                <li><a href="<?php echo base_url(); ?>index.php/admin/pages/add">New</a></li>
                <li><a href="<?php echo base_url(); ?>index.php/admin/pages">Pages</a></li>

            </ul>

        </div>
    </div> <!--end .row-->

    <div class="row">
        <h6><a href="#" id="menu-toggle2">Products</a></h6>
        <div id="menu_list2">
            <ul>
                <li><a href="<?php echo base_url(); ?>index.php/admin/products/add">Produk Baru</a></li>
                <li><a href="<?php echo base_url(); ?>index.php/admin/products">Products</a></li>
                <li><a href="<?php echo base_url(); ?>index.php/admin/categories/add">New Category</a></li>
                <li><a href="<?php echo base_url(); ?>index.php/admin/categories">Categories</a></li>
            </ul>
        </div>
    </div> <!--end .row-->

    <div class="row">
        <h6><a id="menu-toggle8" href="#">Orders</a></h6>
        <div id="menu_list8">
            <ul>
                <li><a href="<?php echo base_url(); ?>index.php/admin/orders">Orders</a></li>
                <li><a href="<?php echo base_url();?>index.php/admin/reports">Laporan Penjualan</a></li>
            </ul>
        </div>
    </div> 

    <!--    end .row-->

    <div class="row">
        <h6><a id="menu-toggle10" href="#">Settings</a></h6>
        <div id="menu_list10">
            <ul>
                <li><a href="<?php echo base_url() ?>index.php/admin/users/profile">Profile</a></li>
                <li><a href="<?php echo base_url() ?>index.php/admin/settings">General</a></li>
            </ul>
        </div>
    </div> <!--end .row-->
    <div class="row">
        <h6><a class="no_sub" href="<?php echo site_url('admin/slides'); ?>">Slides</a></h6>
    </div> <!--end .row-->
    <div class="row">
        <h6><a class="no_sub" href="<?php echo site_url('admin/users'); ?>">Users</a></h6>
    </div> <!--end .row-->
    <div class="row">
        <h6><a class="no_sub" href="<?php echo site_url('admin/members'); ?>">Members</a></h6>
    </div> <!--end .row-->
    <div class="row">
        <h6><a class="no_sub" href="<?php echo site_url('users/logout'); ?>">Logout</a></h6>
    </div> <!--end .row-->

</div>     
