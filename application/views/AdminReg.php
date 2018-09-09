<div class="row">
                    <!-- .col -->
                    <div class="col-md-12 col-lg-12 col-sm-12" id="regID">
                        <div class="white-box">
                            <h3 class="box-title">Recent Problems</h3>
                            <div class="comment-center p-t-10">
                                <?php 
                                    foreach ($reg2 as $row) {
                                  ?>
                                <div class="comment-body">
                                    <div class="user-img"> <img src="<?php echo base_url().'assets/images/user.png';?>" alt="user" class="img-circle">
                                    </div>
                                    <div class="mail-contnet">
                                        <h5><?php echo $row->username;?></h5><span class="time">10:20 AM   20  may 2016</span>
                                        <br/><span class="mail-desc"><?php echo $row->content;?></span> 
                                        
                                        <a href="<?php echo base_url()."Admin/approve/".$row->id;?>" class="btn btn btn-rounded btn-default btn-outline m-r-5"><i class="ti-check text-success m-r-5"></i>Approve</a><a href="<?php echo base_url()."Admin/reject/".$row->id;?>" class="btn-rounded btn btn-default btn-outline"><i class="ti-close text-danger m-r-5"></i> Reject</a>
                                    </div>
                                </div>
                                
                                <?php
                                    }
                                 ?>
                                </div>
                        </div>
                    </div>
                    
                    <!-- /.col -->
                </div>