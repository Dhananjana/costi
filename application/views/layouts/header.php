<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>COSTI Sri Lanka</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url().'assets/css/bootstrap.min.css';?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/font-awesome.min.css';?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/animate.css';?>">
    <link href="<?php echo base_url().'assets/css/prettyPhoto.css';?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/css/style.css';?>" rel="stylesheet" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="<?php echo base_url().'assets/css/mdb.css';?>" rel="stylesheet" />
    <link href="<?php echo base_url().'assets/css/mdb.min.css';?>" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- =======================================================
        Theme Name: Company
        Theme URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
        Author: BootstrapMade
        Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>
<body>
<header>
    <img src="<?php echo base_url().'assets/images/banner.jpg'?>" width="100%" class="img-response" >
        
    
        
       <div class="navigation">
            
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="navbar-brand">
                        <h1><span>Public Observatory System</span></h1>
                    </div>
                </div>

                <div class="navbar-collapse collapse ">
                    <div class="menu">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation"><a href="<?php echo base_url().'Main'?>">Home</a></li>
                            <li role="presentation"><a href="<?php echo base_url().'question'?>">Issues</a></li>
                            <li role="presentation"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">SIGN UP</button></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    




        <div class="modal fade" id="modal_question">
            <div class="">
                <div class="modal-content" style="width:100%;">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Issue</h4>
                    </div>
                    <div class="box">
                        <?php
                        $attributes=array('name'=>'myform');
                        echo form_open_multipart("question/create",$attributes);
                        ?>
                        <div class="form-group">
                            <br>
                            <label><p>1 : Institute * :</p></label>
                            <input class="form-control" name="institute" type="text" placeholder="Enter your institute" style="width: 90%">

                        </div>

                        <div class="form-group">
                            <br>
                            <label><p>2 : Issue category * :</p></label>
                            <input class="form-control" name="category" type="text" placeholder="Enter Issue category" style="width: 90%">
                        </div>

                        <div class="form-group">
                            <label for="Authority"><p>3 : Relavent Authority</p></label>
                            <input class="form-control" name="relavent_authority" type="text" placeholder="Relevant Authority" style="width: 90%">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlFile1"><p>4 : Content * :</p></label>
                            <input class="form-control" name="content" type="textarea" id="myTextarea">

                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlFile1"><p>4 : Media * :</p></label>
                           <p><input type="file"  name="file_name">
                        </div>

                       <!-- <div class="form-group">
                                <input type="radio" name="share" value="yes"><p> Share your contact</p><br>
                                <input type="radio" name="share" value="no" checked> <p> Stay anonymose</p><br>
                        </div>-->


                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary pull-left" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                    <?php echo form_close(); ?>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        </div>

        <div class="modal fade" id="modal_comment">
            <div class="modal-dialog">
                <div class="modal-content container" style="width:90%;">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Add a Comment</h4>
                    </div>
                    <div class="box">
                        <?php echo form_open("comment/create"); ?>
                        <div class="form-group">
                            <input type="hidden" name="question_id" value="<?php echo $this->uri->segment(3)?>" />
                            <label for="exampleFormControlFile1"><p>Content * :</p></label>
                            <input class="form-control" name="content" type="textarea" id="myTextarea1">
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                    <?php echo form_close(); ?>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <div class="container">
        <div class="modal fade" id="myModal" role="dialog">
    <div class="">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
</div>
        <script type="text/javascript">
        function onSelectChange(){
            var sel = document.getElementById('select');
            var strUser = sel.options[sel.selectedIndex].text;  //getting the selected option's text

            if(strUser == 'Other'){ 
                 document.getElementById('yourTextBox').disabled = false;  //enabling the text box because user selected 'Other' option.
            }
        }
            </script>

	</header>
	