<?php defined( 'BASEPATH' ) OR exit( 'No direct script access allowed' ); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="shortcut icon" href="<?php echo base_url(); ?>fn-uploads/dinagat-coders-icon.png" />
    
    <!-- 
    <link rel="stylesheet" href="<?php echo base_url(); ?>fn-assets/vendors/mdi/css/materialdesignicons.min.css"> 
    -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>fn-assets/vendors/css/vendor.bundle.base.css">
    <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>fn-assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css" /> -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>fn-assets/vendors/select2/css/select2.min.css" />
    <!-- 
    <link rel="stylesheet" href="<?php echo base_url(); ?>fn-assets/vendors/jquery-toast-plugin/jquery.toast.min.css" /> 
    -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>fn-assets/css/style-main.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>fn-assets/css/admin.css">

    <?php echo $_styles; ?>
  </head>
  <body <?php echo $body_class; ?> style="background: #FAFBFC;">
    <input type="hidden" id="base_url" value="<?php echo base_url(); ?>" />
    <?php echo $content; ?>

    <script type="text/javascript" src="<?php echo base_url(); ?>fn-assets/vendors/js/vendor.bundle.base.min.js"></script>
    <!-- 
    <script type="text/javascript" src="<?php echo base_url(); ?>fn-assets/vendors/datatables.net/jquery.dataTables.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>fn-assets/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>fn-assets/vendors/inputmask/jquery.inputmask.bundle.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>fn-assets/vendors/jquery-toast-plugin/jquery.toast.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>fn-assets/js/plugins/form.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>fn-assets/js/plugins/validate.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>fn-assets/js/plugins/lazyimg.js"></script> 
    -->
    <script type="text/javascript" src="<?php echo base_url(); ?>fn-assets/vendors/select2/js/select2.full.min.js"></script>
    <!-- 
    <script type="text/javascript" src="<?php echo base_url(); ?>fn-assets/vendors/sweetalert/sweetalert.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>fn-assets/js/helpers/helper_ajax.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>fn-assets/js/helpers/helper_input.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>fn-assets/js/helpers/helper_popups.js"></script> 
    <script type="text/javascript" src="<?php echo base_url(); ?>fn-assets/js/helpers/helper_table.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>fn-assets/js/helpers/helper_action.js"></script> 
    -->

    <?php echo $_scripts; ?>
  </body>
</html> 
