<!DOCTYPE html>
<html>
<head>
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url().'newhome/images/demo/costi.png';?>">
    <title>Costi Sri Lanka</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="<?php echo base_url().'newhome/layout/styles/layout.css';?>" rel="stylesheet" type="text/css" media="all">
    <link href="<?php echo base_url().'newhome/layout/styles/footer.css';?>" rel="stylesheet" type="text/css" >
    <link href="<?php echo base_url().'assets/css/bootstrap.min.css';?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/css/prettyPhoto.css';?>" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <style type="text/css">
    .t1{
        color: #ff5d00;
    }
    </style>
</head>
<body id="top">
<img width="100%"  src="<?php echo base_url().'newhome/images/demo/baner.png';?>" class="imgsp" >
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row0">
    <div id="topbar" class="hoc clear">
        <!-- ################################################################################################ -->
        <div class="fl_left">
            <a class="btn" href="<?php echo base_url().'Main/loadform';?>">POST YOUR PROBLEM HERE.. &raquo;</a>
        </div>
        <div class="fl_right">
            <ul class="nospace">
                <li><a href="<?php echo base_url().'Main';?>"><i class="fa fa-lg fa-home"></i></a></li>
                <li><a href="<?php echo base_url().'question';?>">Issue</a></li>
                <li><a href="<?php echo base_url().'Main/about';?>">About</a></li>
                <li><a href="<?php echo base_url().'Main/contact';?>">Contact</a></li>
                <?php
                if($this->session->userdata('logged')==1) {
                ?>
                    <li><a href="<?php echo base_url().'logout'?>">Logout</a></li>
                    <?php
                }
                ?>
                <?php
                if($this->session->userdata('logged')==0) {
                ?>


                <li><a href="<?php echo base_url().'sign'?>">Login</a></li>
                    <?php
                }
                ?>
                <?php
                    if($this->session->userdata('logged')==0) {
                        ?>
                        <li><a href="<?php echo base_url() . 'sign' ?>">Register</a></li>
                        <?php
                    }
                ?>
            </ul>
        </div>
        <!-- ################################################################################################ -->
    </div>
</div>


