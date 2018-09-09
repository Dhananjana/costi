



	<div class="lates">
		<div class="container">
			<div class="text-center">

                <h1 style="color: #07889B;font-size: 62px;font-weight: 500">STI Space</h1><p style="color: #00abf0">The Public Space for Science Community</p>
			</div>
			<div class="row">
			<div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">

				 <p >The Science Technology and Innovation space (STI Space) contribute to create an ST & I ecosystem by connecting the science community. </p>
			</div>
			<div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">

				<p>This Central Web Portal is designed not only to enable the science community to raise their emerging STI related issues, but also to provide a forum to vote, comment, discussion, debate and share your own personal observations. </p>
			</div>
			<div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">

				<p>Your issues will be either resolved within the STI space or directed to the responsible authorities considering its priority . Your contributions are important and the STI Space is yours!  </p>
			</div>
			</div>
		</div>
	</div>



    <div class="about">
		<div class="container">
			<div class="col-md-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" >
				<h2>Map</h2>
				<!-- <img src="<?php echo base_url().'assets/images/partners/1.jpg';?>" class="img-responsive"/> -->
				</p>
			</div>

			<div class="col-md-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" >

			</div>
		</div>
	</div>
	<section id="partner">
	    <div class="container">
	        <div class="center wow fadeInDown">
	        	<h2>New Issue</h2>
	           	<h3>Add a New Issue</h3>
	           	<button class="button button_round" data-toggle="modal" data-target="#modal_question" style="width: 60px;height: 60px"><b>+</b></button>
	        </div>
        </div><!--/.container-->
    </section><!--/#partner-->\

<div class="feature" id="read_more">
    <div class="container">
        <div class="center wow fadeInDown">
            <h2>Problem Summary</h2>
        </div>

        <br><br>
        <div class="text-center">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <div class="card bs text-white">
                        <br>
                        <div class="card-body">Infrastructure</div>
                        <?php echo $Infrastructure;?>
                        <br><br>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bs1 text-white" >
                        <br>
                        <div class="card-body">Funds</div>
                        <?php echo $Funds;?>
                        <br><br>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-4" >
                    <div class="card bs2 text-white">
                        <br>
                        <div class="card-body">Human Resource and Skill Development</div>
                        <?php echo $Human_Resource;?>
                        <br><br>
                    </div>
                </div>
                <div class="col-md-4" >
                    <div class="card bs3 text-white"><br>
                        <div class="card-body">Administrative and Procurement</div>
                        <?php echo $Administrative;?>
                        <br><br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br>
</div>

	
	 <div class="about">
		<div class="container">
			<div class="col-lg-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" >
				 <div class="media contact-info wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                     <div class="col-lg-12 col-sm-6">
                             <!-- Heading -->
                             <h4>Contact Us</h4>
                             <div class="contact-details">
                                 <!-- Address / Icon -->
                                 <div class="row">
                                     <div class="col-lg-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms"">

                                         <p >
                                             <i class="fa fa-map-marker br-red"></i><br>
                                             Coordinating Secretariat for <br />
                                             Science Technology and Innovation <br />
                                             (COSTI),<br/>
                                             Ministry of Science Technology and Research,<br/>
                                             3rd Floor,<br/>Sethsiripaya - StageI,<br/>
                                             Baththaramulla
                                         </p>
                                     </div>
                                     <div class="col-lg-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">

                                         <p><i class="fa fa-phone br-green"></i><span>+94 11 3133007 <br /> +94 11 2448658 <br /> +94 11 2448671 <br /> +94 11 2448667 </span></p>
                                     </div>
                                     <div class="col-lg-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">

                                         <p></p>
                                     </div>
                                 </div>




                                 <div class="clearfix"></div>
                                 <!-- Contact Number / Icon -->
                                 <div class="col-lg-3"

                                 </div>
                                 <div class="clearfix"></div>
                                 <!-- Email / Icon -->
                                 <div class="col-md-3">
                                    <i class="fa fa-envelope-o br-lblue"></i> <span><a href="mailto:dashboard@costi.gov.lk">dashboard@costi.gov.lk</a></span>
                                 </div>
                                     <div class="clearfix"></div>
                             </div>

                     </div>
                    </div>
			</div>
		</div>
	</div>



<script src="<?php echo base_url().'assets/js/tinymce/jquery.tinymce.min.js';?>"></script>
<script src="<?php echo base_url().'assets/js/tinymce/tinymce.min.js';?>"></script>
<script>
    tinymce.init({
        selector:'#myTextarea',
        height:200,
        theme:'modern',
        plugins:[
            'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            'insertdatetime media nonbreaking save table contextmenu directionality',
            'emoticons template paste textcolor colorpicker textpattern imagetools',
        ],
        toolbar1:'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent | link imag',
        toolbar2: 'print preview media | forecolor backcolor emoticons',
        imag_advtab: true
    });
</script>