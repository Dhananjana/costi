<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url().'newhome/images/demo/costi.png';?>">
	<title>Costi Sri Lanka</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================
	<link rel="icon" type="image/png" href="<?php echo base_url().'proForm/images/icons/favicon.ico';?>"/>-->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'proForm/vendor/bootstrap/css/bootstrap.min.css';?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'proForm/fonts/font-awesome-4.7.0/css/font-awesome.min.css';?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'proForm/fonts/Linearicons-Free-v1.0.0/icon-font.min.css';?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'proForm/vendor/animate/animate.css';?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'proForm/vendor/css-hamburgers/hamburgers.min.css';?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'proForm/vendor/animsition/css/animsition.min.css';?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'proForm/vendor/select2/select2.min.css';?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'proForm/vendor/daterangepicker/daterangepicker.css';?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'proForm/css/util.css';?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'proForm/css/main.css';?>">
<!--===============================================================================================-->
</head>
<body>
	<img width="100%"  src="<?php echo base_url().'newhome/images/demo/baner.png';?>" class="imgsp" >
        
	<div>
		<hr style="color: #000000"/>
		<a href="<?php echo base_url().'main';?>">home</a> &raquo; <a href="<?php echo base_url().'Main/loadform';?>">Issue</a>
		
	</div>
	<div class="container-contact100">

		<div class="wrap-contact100">
				
				<?php
                    echo form_open_multipart("question/create",array('class'=>'contact100-form validate-form'));
                ?>
                <span class="contact100-form-title">
					Post an Issue
				</span>
				<div class="wrap-input100">
					<div class="label-input100">Issue Category:</div>
					<div>
						<select class="js-select2" name="category">
							<option value="">--Select Category--</option>
							<option value="Infrastructure">Infrastructure</option>
							<option value="Funds">Funds</option>
							<option value="Human Resource and Skill Development">Human Resource and Skill Development</option>
							<option value="Administrative and Procurement">Administrative and Procurement</option>
							<option value="Intellectual Property Management">Intellectual Property Management</option>
							<option value="other">Other</option>
						</select>
						<div class="dropDownSelect2"></div>
					</div>
					<span class="focus-input100"></span>
				</div>
				
				<div id="catother">
					<label class="label-input100" id="catlabel" for="name">Please Specify:</label>
					<input id="name" class="input100" type="text" name="categoryother" placeholder="Enter your category...">
					<br>
				</div>
		
				<label class="label-input100" id="catlabel" for="name">Please locate the marker on the map also.</label>
				<div class="wrap-input100 validate-input" data-validate="Institute is required">
					<label class="label-input100" for="name">Institute:</label>
					<input class="input100" type="text" name="institute" placeholder="Enter your name...">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Required Authority is required">
					<label class="label-input100" for="name">Required Authority:</label>
					<input class="input100" type="text" name="relavent_authority" placeholder="Enter required authority...">
					<span class="focus-input100"></span>
				</div>


				<div class="wrap-input100 " >
					<label class="label-input100" for="email">Email Address (Optional)</label>
					<input  class="input100" type="email" name="email" placeholder="Enter your email...">
					<span class="focus-input100"></span>
				</div>

				

				<div class="wrap-input100 validate-input" data-validate = "Content is required">
					<label class="label-input100" for="message">Complaint Descrption:</label>
					<textarea id="message" class="input100" name="content" placeholder="Type your complaint description..."></textarea>
					<span class="focus-input100"></span>
				</div>

				<input type="hidden" value="" id="latitude" name="lat">
				<input type="hidden" value="" id="longitude" name="lng">

				<div class="wrap-input100" >
					<label class="label-input100" for="name">Media:</label>
					<input class="input100" type="file" name="media" >
					<span class="focus-input100"></span>
				</div>
				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" type="submit">
						Save my Issue
					</button>
				</div>

				<div class="contact100-form-social flex-c-m">
					<a href="#" class="contact100-form-social-item flex-c-m bg1 m-r-5">
						<i class="fa fa-facebook-f" aria-hidden="true"></i>
					</a>

					<a href="#" class="contact100-form-social-item flex-c-m bg2 m-r-5">
						<i class="fa fa-twitter" aria-hidden="true"></i>
					</a>

					<a href="#" class="contact100-form-social-item flex-c-m bg3">
						<i class="fa fa-youtube-play" aria-hidden="true"></i>
					</a>
				</div>
			<?php echo form_close(); ?>
			<div class="contact100-more flex-col-c-m " >
			<label class="label-input100" for="message">Location:</label>
			<div id="googleMap" style="width:100%;height:900px;"></div>
			</div>
		</div>
	</div>





<!--===============================================================================================-->
	<script src="<?php echo base_url().'proForm/vendor/jquery/jquery-3.2.1.min.js';?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url().'proForm/vendor/animsition/js/animsition.min.js';?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url().'proForm/vendor/bootstrap/js/popper.js';?>"></script>
	<script src="<?php echo base_url().'proForm/vendor/bootstrap/js/bootstrap.min.js';?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url().'proForm/vendor/select2/select2.min.js';?>"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});
		})
		$(".js-select2").each(function(){
			$(this).on('select2:open', function (e){
				$(this).parent().next().addClass('eff-focus-selection');
			});
		});
		$(".js-select2").each(function(){
			$(this).on('select2:close', function (e){
				$(this).parent().next().removeClass('eff-focus-selection');
			});
		});

	</script>
<!--===============================================================================================-->
	<script src="<?php echo base_url().'proForm/vendor/daterangepicker/moment.min.js';?>"></script>
	<script src="<?php echo base_url().'proForm/vendor/daterangepicker/daterangepicker.js';?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url().'proForm/vendor/countdowntime/countdowntime.js';?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url().'proForm/js/main.js';?>"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
	<script type="text/javascript">
	$('select[name=category]').change(function () {
    if ($(this).val() == 'other') {
        $('#catother').show();
    } else {
        $('#catother').hide();
    }
});
	</script>
	<script>
function myMap() {
  var myCenter = new google.maps.LatLng(7.645597492221576,80.08565722656249);
  var mapCanvas = document.getElementById("googleMap");
  var mapOptions = {center: myCenter, zoom: 8};
  var map = new google.maps.Map(mapCanvas, mapOptions);
  var marker = new google.maps.Marker({
    position: myCenter,
    draggable:true,
   // animation: google.maps.Animation.BOUNCE
  });
  marker.setMap(map);
  google.maps.event.addListener(marker, 'dragend', function(event) {
   console.log(event.latLng.lat(), event.latLng.lng());
   document.getElementById('latitude').value=event.latLng.lat();
   document.getElementById('longitude').value=event.latLng.lng();
});
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCLK99r1PIxxghzB005y0f67URRKVnA40k&callback=myMap"></script>
</body>
</html>
