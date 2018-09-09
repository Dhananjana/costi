<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url().'newhome/images/demo/costi.png';?>">
  <title>Sign-Up/Login Form</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="<?php echo base_url().'signUp/css/style.css';?>">

  
</head>

<body>
  <br>
<div>
    
    <a href="<?php echo base_url().'main';?>"><button class="btn btn-primary">&laquo; home</button></a> 
    
  </div>
  <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Sign Up</h1>
          
          <?php echo form_open_multipart('sign/reg');?>
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                Name<span class="req">*</span>
              </label>
              <input type="text" name="name" required autocomplete="off" />
            </div>
        
            <div class="field-wrap">
              <label>
                Institute<span class="req">*</span>
              </label>
              <input type="text" name="institute" autocomplete="off"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" name="email" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password" name="password" required autocomplete="off"/>
          </div>
          <div class="field-wrap">
            <label><small>By signing up, you agree to the Terms of services and confirm that you have read site and Privacy or Data Policy including Cookie use. You will receive a confirmation email to your given email</small></label>
          </div>
          <br><br><br><br><br>
          <button type="submit" class="button button-block"/>SIGNUP</button>
          
          <?php echo form_close();?> 

        </div>
        
        <div id="login">   
          <h1>Welcome Back!</h1>
          
          <?php echo form_open_multipart('sign/sign1');?>
          
            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" name="email2" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" name="pass" required autocomplete="off"/>
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <button class="button button-block"/>Log In</button>
          
          <?php echo form_close();?>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="<?php echo base_url().'signUp/js/index.js';?>"></script>




</body>

</html>
