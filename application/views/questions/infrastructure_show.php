<div id="bckg" style="background-image:url(<?php echo base_url().'assets/images/bck2.jpg';?>);">

    <div  class="w3-card-4 w3-container " style="width:70%; margin-top: 80px; margin-bottom: 40px;background-color: #eee;margin-left: 15%;margin-right: 15%">
        <br><br>

        <?php

        if( !empty($inf) ) {
            foreach ($inf as $data) {
                ?>

                <div class="card" style="width: 80%;height:auto;background-color: white; margin-left:10%;padding-left: 2%;padding-top: 2%;border-radius: 1%" >
                    <div class="w3-container">
                        <p class="card-text">
                        <div class="w3-header primary">
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
                        <br><br><br>

                        <p class="card-text"><?php echo $data->content ?></p>
                        <br>
                        <?php
                        if(is_null($data->multimedia)==false) {
                            ?>
                            <p class="card-text"><img src="<?php echo base_url() . 'uploads/' . $data->multimedia ?>">
                            </p>
                            <?php
                        }
                        ?>
                        <br>
                    </div>
                    <footer class="w3-container ">
                        <div class="col-lg-2">
                            <a class="card-link" onclick="javascript:savelike(<?php echo $data->id;?>);" href="<?php echo base_url() . 'question/likes/' . $data->id ?>">
                                <p><i class="fa fa-thumbs-o-up" style="font-size:18px;color:blue"></i>
                                    Like<?php echo " " . $data->likes ?>
                                </p>
                            </a>

                        </div>
                        <div class="col-lg-5">
                            <a class="card-text" >
                                <p><i class="glyphicon glyphicon-pencil" style="font-size:18px;color:blue"></i>
                                    Created at<?php
                                    date_default_timezone_set('Asia/Colombo'); # add your city to set local time zone
                                    $now = date('Y-m-d H:i:s');
                                    echo timespan($now,$data->created,2)
                                    ; ?>
                                </p>
                            </a>

                        </div>
                        <br><br><br>
                    </footer>
                </div>
                <br><br>

                <?php
            }
        }
        ?>


    </div>

</div>