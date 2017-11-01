<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $this->general->getSetting('Site.Name');?> Project <?php echo $this->general->getSetting('Site.Title');?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="<?php echo base_url() ?>public/front/css/bootstrap.css" rel="stylesheet"/>
        <link href="<?php echo base_url() ?>public/front/css/main.css" rel="stylesheet"/>
        <link href="<?php echo base_url() ?>public/front/css/jquery.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>public/front/css/datepicker.css" rel="stylesheet">

    </head>
    <body>
        <div class="container">
            <!-- Start Header-->
            <?php $this->load->view('header'); ?>
            <!-- End Header-->

            <!-- Start Navigation -->
            <?php $this->load->view('widget/top_menu'); ?>
            <!-- End Navigation -->

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


            <!-- Start Footer -->
            <?php $this->load->view('footer'); ?>
            <!-- End Footer-->
        </div>
        <script src="<?php echo base_url() ?>public/front/js/jquery.js"></script>
        <script src="<?php echo base_url() ?>public/front/js/jquery.js"></script>
        <script src="<?php echo base_url() ?>public/front/js/bootstrap.js"></script>
        <script src="<?php echo base_url() ?>public/front/js/bootstrap-datepicker.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                var startDate = new Date(2012,1,20);
                $('.datepicker').datepicker({format: 'yyyy-mm-dd',startDate:startDate});

            });
        </script>
        <script type="text/javascript">
            var json = <?php echo $json_array; ?>;
                function changeValue(myValue) {
                document.getElementById("unitPrice").value = json[myValue];
            }
        </script>
        <script type="text/javascript">
            $('#dropdownlist1').on('change', function(){
                var dataValue = $('option:selected', this).attr('data-value');//getting the value from the attribute
                    $('#field1').val(dataValue);//add the value to input box
            });
        </script>
    </body>
</html>
