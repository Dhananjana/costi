
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper bgded" >
    <!-- ################################################################################################ -->
        <img   src="<?php echo base_url().'newhome/images/demo/newhomenew.png';?>" class="" style="width: 100% !important; height: auto  !important;" >
    <!-- ################################################################################################ -->
</div>
<!-- ################################################################################################ -->
<?=$nav?>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div id="map">
  <?=$home?>
</div>

<!-- ################################################################################################ -->
<div class="wrapper row2" id="pc" style="background-color: #fafafa">
  <main class="hoc container clear" >

    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="center btmspace-80">
      <h3 class="heading">Issue Summery</h3>

    </div>
    <ul class="nospace group cta">
        <div class="col-lg-7">
            <div class="row">
                <li class="one_quarter first">
                  <article><span><?php echo $Infrastructure;?></span>
                    <h6 class="heading font-x1"><small><a href="#">Infrastructure</a></small></h6>
                        <footer><a href="<?php echo base_url().'question/infrastructure_show';?>">More &raquo;</a></footer>
                  </article>
                </li>
                 <div class="col-lg-1"></div>
                <li class="one_quarter">
                  <article><span><?php echo $Funds;?></span>
                    <h6 class="heading font-x1"><small><a href="#">Funds</a></small></h6>
                    <footer><a href="<?php echo base_url().'question/funds_show';?>">More &raquo;</a></footer>
                  </article>
                </li>
                <div class="col-lg-1"></div>
                <li class="one_quarter">
                  <article><span><?php echo $Human_Resource;?></span>
                      <h6 class="heading font-x1"><small><a href="#">Human Resource Skill Development</a></small></h6>
                    <footer><a href="<?php echo base_url().'question/human_Resource_Skill_Development_show';?>">More &raquo;</a></footer>
                  </article>
                </li>
            </div>
            <br>
      <li class="one_quarter">
        <article><span><?php echo $Administrative;?></span>
            <h6 class="heading font-x1"><small><a href="#">Administrative Procurement</a></small></h6>
          <footer><a href="<?php echo base_url().'question/administrative_and_Procurement_show';?>">More &raquo;</a></footer>
        </article>
      </li>
      <div class="col-lg-1"></div>
        <li class="one_quarter">
            <article><span><?php echo $Administrative;?></span>
                <h6 class="heading font-x1"><small><a href="#">Intellectual Property Management</a></small></h6>
                <footer><a href="#">More &raquo;</a></footer>
            </article>
        </li>
        <div class="col-lg-1"></div>
        <li class="one_quarter">
            <article><span><?php echo $Administrative;?></span>
                <h6 class="heading font-x1"><small><a href="#">Other</a></small></h6>
                <footer><a href="#">More &raquo;</a></footer>
            </article>
        </li>
        </div>


        <div class="col-lg-4">
        <li >
            <div id="piechart" style="background-color: #fafafa"></div>

            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

            <script type="text/javascript">
                // Load google charts
                google.charts.load('current', {'packages':['corechart']});
                google.charts.setOnLoadCallback(drawChart);

                // Draw the chart and set the chart values
                function drawChart() {
                    var data = google.visualization.arrayToDataTable([
                        ['category', 'ammount'],
                        ['Infrastructure', <?php echo $Infrastructure;?>],
                        ['Funds', <?php echo $Funds;?>],
                        ['Human_Resource',<?php echo $Human_Resource;?>],
                        ['Administrative', <?php echo $Administrative;?>],
                        ['Other', 1]
                    ]);

                    // Optional; add a title and set the width and height of the chart
                    var options = {'title':'', 'width':650, 'height':500};

                    // Display the chart inside the <div> element with id="piechart"
                    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                    chart.draw(data, options);
                }
            </script>
        </li>
        </div>
    </ul>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div id="pyp" class="wrapper bgded" style="background-image:url('<?php echo base_url().'newhome/images/demo/backgrounds/banner.jpg';?>'); height: 250px; " >
  <article class="hoc container clear center"> 
    <!-- ################################################################################################ -->
    <br><br><br>
    <a class="btn" href="<?php echo base_url().'Main/loadform';?>" style="margin-top: 30px;">POST YOUR PROBLEM HERE.. &raquo;</a>
    <!-- ################################################################################################ -->
  </article>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
    <section class="hoc container clear">
        <!-- ################################################################################################ -->
        <div class="center btmspace-80">
            <h3 class="heading">Issue Categories</h3>
        </div>
        <ul class="nospace group latest">
            <li class="one_half first btmspace-30">
                <article class="group" style="background-color: #eeeeee">
                    <div class="one_half first"><a href="#"><img src="<?php echo base_url().'newhome/images/demo/6.png';?>" alt=""></a></div>
                    <div class="one_half">
                        <h3 class="heading">Infrastructure</h3>
                        <p>Post the issues pertaining to repair & management of instrument, unavailability of central facilities and inability to access cost prohibitive high tech instrument.</p>
                        <footer><a href="<?php echo base_url().'main/subcat'?>#one">Read More &raquo;</a></footer>
                    </div>
                </article>
            </li>
            <li class="one_half btmspace-30">
                <article class="group" style="background-color: #eeeeee">
                    <div class="one_half first"><a href="#"><img src="<?php echo base_url().'newhome/images/demo/2.png';?>" alt=""></a></div>
                    <div class="one_half">
                        <h3 class="heading">Funds</h3>
                        <p>Post all the funding issues encountered in the innovation ecosystem related to grants, investors, venture capital providers and etc.</p>
                        <footer><a href="<?php echo base_url().'main/subcat'?>#two">Read More &raquo;</a></footer>
                    </div>
                </article>
            </li>
            <li class="one_half first">
                <article class="group" style="background-color: #eeeeee">
                    <div class="one_half  first"><a href="#"><img src="<?php echo base_url().'newhome/images/demo/3.jpg';?>" alt=""></a></div>
                    <div class="one_half">
                        <h3 class="heading">Human Resource</h3>
                        <p>Post all issues with regards to the Scholarships, Local and foreign training,  workshops, literature, consultancies, expertise knowledge & etc.</p>
                        <footer><a href="<?php echo base_url().'main/subcat'?>#three">Read More &raquo;</a></footer>
                    </div>
                </article>
            </li>
            <li class="one_half">
                <article class="group" style="background-color: #eeeeee">
                    <div class="one_half first"><a href="#"><img src="<?php echo base_url().'newhome/images/demo/4.png';?>" alt=""></a></div>
                    <div class="one_half">
                        <h3 class="heading">Administrative</h3>
                        <p>Issues pertaining to customs clearing and other complicated and lengthy procedures.</p>
                        <footer><a href="<?php echo base_url().'main/subcat'?>#four">Read More &raquo;</a></footer>
                    </div>                    
                </article>
            </li>

            <li class="one_half first" style="margin-top: 30px">
                <article class="group" style="background-color: #eeeeee">
                    <div class="one_half first"><a href="#"><img src="<?php echo base_url().'newhome/images/demo/8.jpg';?>"  alt=""></a></div>
                    <div class="one_half">
                        <h3 class="heading">Intellectual Property Management</h3>
                        <p>Issues related to all sort of intellectual property including patents, Industrial Designs, Trademarks, licensing, Tech transfers & etc.</p>
                        <footer><a href="<?php echo base_url().'main/subcat'?>#five">Read More &raquo;</a></footer>
                    </div>                
                </article>
            </li>

            <li class="one_half " style="margin-top: 30px">
                <article class="group" style="background-color: #eeeeee">
                    <div class="one_half first"><a href="#"><img src="<?php echo base_url().'newhome/images/demo/7.png';?>" alt=""></a></div>
                    <div class="one_half">
                        <h3 class="heading">Other</h3>
                        <p></p>
                        <footer><a href="#">Read More &raquo;</a></footer>
                    </div>                    
                </article>
            </li>


        </ul>
        <!-- ################################################################################################ -->
    </section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
