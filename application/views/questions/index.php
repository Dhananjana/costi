<!DOCTYPE html>
<html>
<head>
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url().'newhome/images/demo/costi.png';?>">
<title>Costi Sri Lanka</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="<?php echo base_url().'newhome/layout/styles/layout.css';?>" rel="stylesheet" type="text/css" media="all">
<link href="<?php echo base_url().'newhome/layout/styles/footer.css';?>" rel="stylesheet" type="text/css" >
<link href="<?php echo base_url().'assets/css/prettyPhoto.css';?>" rel="stylesheet">
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
      <ul class="nospace">
        <li><a class="btn" href="<?php echo base_url().'Main/loadform';?>">POST YOUR PROBLEM HERE.. &raquo;</a></li>
      </ul>
    </div>
    <div class="fl_right">
      <ul class="nospace">
        <li><a href="<?php echo base_url().'Main';?>"><i class="fa fa-lg fa-home"></i></a></li>
        <li><a href="<?php echo base_url().'question';?>">Issue</a></li>
        <li><a href="<?php echo base_url().'Main/about';?>">About</a></li>
        <li><a href="<?php echo base_url().'Main/contact';?>">Contact</a></li>
        <?php
        if($this->session->userdata('logged')>0) {
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
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <h1><a href="">PUBLIC OBSEVATORY SYSTEM</a></h1>
      
    </div>
    <!-- ################################################################################################ -->
    <nav id="mainav" class="fl_right">
      <ul class="clear">
      <li><a class="drop active" href="#">Home</a>
          <ul>
              <li><a href="<?php echo base_url().'main'?>#map">Map</a></li>
              <li><a href="<?php echo base_url().'main'?>#pc">Issue Categories</a></li>
              <li><a href="<?php echo base_url().'main'?>#pyp">Post Your Problem</a></li>
          </ul>
      </li>
      <li>
          <a  href="<?php echo base_url().'question'?>">Issue</a>
      </li>
      </ul>
    </nav>
    <!-- ################################################################################################ -->
  </header>
</div>
<div id="bckg" style="background-image:url(<?php echo base_url().'assets/images/bc.jpg';?>);">

    <div  class="w3-card-4  " style="width:70%;  margin-bottom: 40px;background-color: #eee;margin-left: 15%;margin-right: 15%">
        <br><br>
        <?php
        if(isset($this->session->flashdata['item'])) {
            $message = $this->session->flashdata('item');
            ?>
            <div class="<?php echo $message['class'];?>">
                <?php echo $message['message']; ?>
            </div>
            <?php
        }
        ?>
        <?php

        if( !empty($results) ) {
            foreach ($results as $data) {
                ?>

                <div class="card" style="width: 80%;height:auto;background-color: white; margin-left:10%;padding-left: 2%;padding-top: 2%;border-radius: 1%" >
                    <div class="w3-container">
                        <p class="card-text">
                        <div class="w3-header primary">

                            <div class="col-lg-3"><img src="<?php echo base_url() . 'assets/images/user2.png';?> " style=" height: 150px;width: 150px; border-radius: 100%; border-color: #0d0d0d ;border: 3px solid" ></div>
                            <div class="col-lg-4">
                                <br>
                                <?php
                                if(is_null($data->username)==false) {
                                    echo '<p>'.'<b>'.$data->username.'</b>'.'</p>' ;
                                }

                                else{
                                    echo '<p>'.'<b>'."Unknown".'</b>'.'</p>';
                                }
                                ?>
                            </div>
                        </div>
                        

                        <p class="card-text"><?php echo $data->content ?></p>
                        
                        <?php
                        if(is_null($data->multimedia)!=false) {
                            ?>
                            <p class="card-text"><img src="<?php echo base_url() . 'uploads/' . $data->multimedia ?>">
                            </p>
                            <?php
                        }
                        ?>
                        
                    </div>
                    <?php
                    if($this->session->userdata('logged')>0){
                    ?>
                    <footer class="w3-container ">
                        <div class="col-lg-2">
                            <a class="card-link" onclick="javascript:savelike(<?php echo $data->id; ?>);"
                               href="<?php echo base_url() . 'question/likes/' . $data->id ?>">
                                <p><i class="fa fa-thumbs-o-up" style="font-size:18px;color:blue"></i>
                                    Like<?php echo " " . $data->likes ?>
                                </p>
                            </a>

                        </div>
                        <div class="col-lg-3">
                            <a class="card-link" href="<?php echo base_url() . 'comment/index/' . $data->id ?>">
                                <p><i class="fa fa-comment-o" style="font-size:18px;color:blue"></i>
                                    Comment<?php echo " " . $data->comments ?>
                                </p>
                            </a>
                        </div>
                        <?php
                        }
                        ?>
                        <div class="col-lg-5">
                            <p><i class="glyphicon glyphicon-pencil" style="font-size:18px;color:blue"></i>
                                Created at <?php
                                $date = new DateTime($data->created);
                                $now = new DateTime();
                                echo $date->diff($now)->format(" %y years,%d days, %h hours and %i minuts");
                                /*if($date->diff($now)->format("%y")>0){
                                    echo $date->diff($now)->format(" %y years ago");
                                }
                                else if($date->diff($now)->format("%m")>0 ){
                                    echo $date->diff($now)->format(" %m months ago");
                                }
                                else if($date->diff($now)->format("%h")>0){
                                    echo $date->diff($now)->format(" %h hours ago");
                                }
                                else{
                                    echo $date->diff($now)->format(" %i minutes ago");
                                }*/
                                //echo $data->created;
                                ?>
                            </p>

                        </div>
                        
                    </footer>
                </div>
                

                <?php
            }
        }
        ?>

        <p><center><?php echo "<p>".$links."</p>"; ?></center></p>

        <?php $this->view('questions/create'); ?>
        <br><br><br><br>
    </div>
</div>









