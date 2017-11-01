<div class="span12">
    <?php echo set_breadcrumb('<span class="divider">/</span>') ?>
    <div class="page-header">
        <h1>Konfirmasi Berhasil</h1>
    </div>
    <?php if ($this->session->flashdata('message')): ?>
        <?php echo $this->session->flashdata('message'); ?>
    <?php endif ?>
    <br/>
    <a href="<?php echo base_url() ?>" class="btn btn-primary">Kembali ke beranda</a>
</div>
