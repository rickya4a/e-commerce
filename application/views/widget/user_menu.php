
<?php if ($this->session->userdata('id')): ?>
    <a href="<?php echo base_url() ?>index.php/orders/history">Riwayat Belanja</a> |
    <a href="<?php echo base_url() ?>index.php/members/profile">Profil</a> | 
    <a href="<?php echo base_url() ?>index.php/members/logout">Keluar</a> 
<?php else: ?>

    <a href="<?php echo base_url() ?>index.php/members/register">Daftar</a>  |
    <a href="<?php echo base_url() ?>index.php/members/login">Masuk</a>

<?php endif; ?>
