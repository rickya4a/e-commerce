<footer>
    <hr>
    <div class="row well no_margin_left">
        <div id="wrapper">
                        
            <div class="span3">
                <h4>Informasi</h4>
                <ul>
                    <li><a href="<?php echo base_url() ?>index.php/pages/read/about">Tentang Kami</a></li>
                    <li><a href="<?php echo base_url() ?>index.php/products">Produk</a></li>
                    <li><a href="<?php echo base_url() ?>index.php/pages/read/how-to-shop">Cara Berbelanja</a></li>

                </ul>
            </div>
            <div class="span3">
                <h4>Layanan Pelanggan</h4>
                <ul>
                    <li><a href="<?php echo base_url() ?>index.php/pages/read/contact">Hubungi Kami</a></li>

                </ul>
            </div>
            <div class="span3">
                <h4>Akun Saya</h4>
                <ul>
                    <?php if ($this->session->userdata('id')): ?>
                        <li><a href="<?php echo base_url() ?>index.php/orders/history">Riwayat Belanja</a></li>
                        <li> <a href="<?php echo base_url() ?>index.php/members/profile">Profil</a> </li>
                        <li><a href="<?php echo base_url() ?>index.php/members/logout">Keluar</a> </li>
                    <?php else: ?>

                        <li><a href="<?php echo base_url() ?>index.php/members/register">Daftar</a> </li>
                        <li><a href="<?php echo base_url() ?>index.php/members/login">Masuk</a> </li>

                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
</footer>
