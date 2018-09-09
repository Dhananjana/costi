<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url().'newhome/images/demo/costi.png';?>"><title>COSTI Sri Lanka</title>
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url().'assets/bootstrap/dist/css/bootstrap.min.css';?>" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="<?php echo base_url().'assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css';?>" rel="stylesheet">
    <!-- toast CSS -->
    <link href="<?php echo base_url().'assets/plugins/bower_components/toast-master/css/jquery.toast.css';?>" rel="stylesheet">
    <!-- morris CSS -->
    <link href="<?php echo base_url().'assets/plugins/bower_components/morrisjs/morris.css';?>" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="<?php echo base_url().'assets/plugins/bower_components/chartist-js/dist/chartist.min.css';?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css';?>" rel="stylesheet">
    <!-- animation CSS -->
    <link href="<?php echo base_url().'assets/css_admin/animate.css';?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo base_url().'assets/css_admin/style.css';?>" rel="stylesheet">
    <!-- color CSS -->
    <link href="<?php echo base_url().'assets/css_admin/colors/default.css';?>" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function()
  {
      refresh();
  });

  function refresh()
  {
      setTimeout(function()
      {
          $('#regID').load('<?php echo base_url()?>Admin/load');
          refresh();
      }, 5000);
  }
  </script>
</head>

<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                
                <!-- /Logo -->
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <a class="profile-pic" href="#"> <img src="<?php echo base_url().'assets/plugins/images/users/varun.jpg';?>" alt="user-img" width="36" class="img-circle"><b class="hidden-xs"><?php echo $this->session->userdata('username')?></b></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- End Top Navigation -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3>
                </div>
                <ul class="nav" id="side-menu">
                    <li style="padding: 70px 0 0;">
                        <a href="" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="#" class="waves-effect"><i class="fa fa-table fa-fw" aria-hidden="true"></i>Admin</a>
                    </li>
                    <li>
                        <a href="#" class="waves-effect"><i class="fa fa-globe fa-fw" aria-hidden="true"></i>Problems</a>
                    </li>
                    
                </ul>
            </div>
            
        </div>
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Dashboard</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <!-- ============================================================== -->
                <!-- Different data widgets -->
                <!-- ============================================================== -->
                <!-- .row -->
                <div class="row">
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Number of Issues</h3>
                            <ul class="list-inline two-part">
                                <li>
                                    <div id="sparklinedash"></div>
                                </li>
                                <li class="text-right"><i class="ti-arrow-up text-success"></i> <span class="counter text-success"><?php echo $qc?></span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Number of solved Issues</h3>
                            <ul class="list-inline two-part">
                                <li>
                                    <div id="sparklinedash2"></div>
                                </li>
                                <li class="text-right"><i class="ti-arrow-up text-purple"></i> <span class="counter text-purple"><?php echo $sq?></span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div class="white-box analytics-info">
                            <h3 class="box-title">Number of Users</h3>
                            <ul class="list-inline two-part">
                                <li>
                                    <div id="sparklinedash3"></div>
                                </li>
                                <li class="text-right"><i class="ti-arrow-up text-info"></i> <span class="counter text-info"><?php echo $uc?></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--/.row -->
                
                <!-- ============================================================== -->
                <!-- chat-listing & recent comments -->
                <!-- ============================================================== -->
                <?=$reg1?>

                <!-- /.row -->
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">On Going Issues</h3>

                                <div class="box-tools">
                                    <div class="input-group input-group-sm" style="width: 150px;">
                                        <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                                        <div class="input-group-btn">
                                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body table-responsive no-padding">
                                <table class="table table-hover">
                                    <tr>
                                        <th>ID</th>
                                        <th>Institute</th>
                                        <th>Category</th>
                                        <th>Content</th>
                                        <th>multimedia</th>
                                        <th>status</th>
                                        <th>Relavant Authority</th>
                                    </tr>

                                    <?php
                                    foreach($pros as $pro) {
                                        ?>
                                        <tr>
                                            <td><?php echo$pro->id?></td>
                                            <td><?php echo $pro->institute ?></td>
                                            <td><?php echo $pro->category ?></td>
                                            <td><?php echo $pro->content ?></td>
                                            <?php
                                                if($pro->multimedia !=Null) {
                                                    ?>
                                                    <td>
                                                        <img src="<?php echo base_url() . 'uploads/' . $pro->multimedia; ?>"
                                                    </td>
                                                    <?php
                                                }

                                                else {

                                                    ?>
                                                    <td>No media</td>
                                                    <?php
                                                }
                                            ?>

                                            <td>
                                                <button id="btn-pro"><a href="<?php echo base_url().'admin/updatePro/'.$pro->id?>"><span class="label label-success">Close</span></a></button>
                                            </td>
                                            <td><?php echo $pro->relavent_authority ?></td>
                                        </tr>
                                        <?php
                                    }
                                    ?>
                                </table>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2018 &copy; Costi  brought to you by <a href="https://www.facebook.com/TeamForesight1">Team Foresight</a> </footer>
        </div>
        <!-- ============================================================== -->

        <!-- End Page Content -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->

    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?php echo base_url().'assets/plugins/bower_components/jquery/dist/jquery.min.js';?>"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url().'assets/bootstrap/dist/js/bootstrap.min.js';?>"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="<?php echo base_url().'assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js';?>"></script>
    <!--slimscroll JavaScript -->
    <script src="<?php echo base_url().'assets/js_admin/jquery.slimscroll.js';?>"></script>
    <!--Wave Effects -->
    <script src="<?php echo base_url().'assets/js_admin/waves.js';?>"></script>
    <!--Counter js -->
    <script src="<?php echo base_url().'assets/plugins/bower_components/waypoints/lib/jquery.waypoints.js';?>"></script>
    <script src="<?php echo base_url().'assets/plugins/bower_components/counterup/jquery.counterup.min.js';?>"></script>
    <!-- chartist chart -->
    <script src="<?php echo base_url().'assets/plugins/bower_components/chartist-js/dist/chartist.min.js';?>"></script>
    <script src="<?php echo base_url().'assets/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js';?>"></script>
    <!-- Sparkline chart JavaScript -->
    <script src="<?php echo base_url().'assets/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js';?>"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url().'assets/js_admin/custom.min.js';?>"></script>
    <script src="<?php echo base_url().'assets/js_admin/dashboard1.js';?>"></script>
    <script src="<?php echo base_url().'assets/plugins/bower_components/toast-master/js/jquery.toast.js';?>"></script>
</body>

</html>
