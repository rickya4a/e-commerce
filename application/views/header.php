<div class="row">
    <div class="span4 logo">
        <a href="<?php echo base_url(); ?>" style="text-decoration: none;">
            <h1>ProjectTA</h1>
        </a>
    </div>
    <div class="span8">
        <div class="row">
            <div class="span1">&nbsp;</div>
            <div class="span2">&nbsp;</div>
            <div class="span2">
                <a href="<?php echo site_url('carts'); ?>"><h4>Keranjang Belanja (<?php echo $this->cart->total_items() ?>)</h4></a>
                <a href="<?php echo site_url('carts'); ?>"><?php echo number_format($this->cart->total())?> IDR </a>
            </div>
            <div class="span3 customer_service">
                <h4>Promo Gratis Ongkir</h4>
                <h4><small>Layanan Pelanggan : 0878xxxxxx</small></h4>

            </div>

        </div>
        <br/>
        <div class="row">
            <div class="link pull-right">
                <?php $this->load->view('widget/user_menu'); ?>
            </div>
        </div>
    </div>
</div>
