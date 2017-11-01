<!DOCTYPE html>
<html>
    <head>
        <title>Laporan Belanja</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="<?php echo base_url() ?>public/front/css/bootstrap.css" rel="stylesheet"/>
        <link href="<?php echo base_url() ?>public/front/css/main.css" rel="stylesheet"/>
        <link href="<?php echo base_url() ?>public/front/css/jquery.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>public/front/css/datepicker.css" rel="stylesheet">

    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="span12">
                    <?php if ($this->session->flashdata('success')): ?>
                        <div  class="alert alert-success">
                            <?php echo $this->session->flashdata('success'); ?>
                        </div>
                    <?php endif; ?>

                    <?php if ($this->session->flashdata('error')): ?>
                        <div  class="alert alert-error">
                            <?php echo $this->session->flashdata('error'); ?>
                        </div>
                    <?php endif; ?>
                    <?php if (validation_errors()): ?>
                        <div  class="alert alert-error">
                            <?php echo validation_errors(); ?>
                        </div>
                    <?php endif; ?>
                </div>
                <?php if (!empty($content)): ?>
                    <?php $this->load->view($content); ?>
                <?php else: ?>
                    Page not found !
                <?php endif; ?>
            </div>
        </div>
        <script src="<?php echo base_url() ?>public/front/js/jquery.js"></script>
        <script src="<?php echo base_url() ?>public/front/js/jquery.js"></script>
        <script src="<?php echo base_url() ?>public/front/js/bootstrap.js"></script>
        <script src="<?php echo base_url() ?>public/front/js/bootstrap-datepicker.js"></script>
        <script>
            $(document).ready(function() {
                $('#myButton').click(function() {
                    window.print();
                });
            });
        </script>
    </body>
</html>
