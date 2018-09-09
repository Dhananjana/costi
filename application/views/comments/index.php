<div id="bckg" style="background-image:url(<?php echo base_url().'assets/images/bck2.jpg';?>);">
    <div  class="w3-card-4 w3-container" style="width:70%; background-color: #eee;margin-left: 15%;margin-right: 15%">
        <br><br>
        <div class="card " style="width: 80%;height:auto;background-color: white; margin-left:10%;padding-left: 2%;padding-top: 2%;border-radius: 1%">
         <br>
        
            <div class="col-lg-2">
                <img src="<?php echo base_url().'assets/images/que.png';?>" class="image-style" style="max-width: 120px; max-height: 120px">
            </div>
       <font size="5px">
        <?php
        foreach ($question as $row) {
            echo $row->content;
        }
        ?>
        
        </font>
        <br>
            <?php
            if( !empty($results) ) {
                foreach ($results as $data) {
        ?>
                    <div class="card " style="width: 60%;margin-left:20%;padding-left: 2%;border-radius: 1%;background-color: #eee">
                        <div class="w3-container">
                            <br>
                            <div class="col-lg-2">
                                <img src="<?php echo base_url().'assets/images/chatcomments.png';?>" class="image-style" style="max-width:80px; max-height:80px">
                            </div> <div class="col-lg-1"></div>
                            <div class="col-lg-6 col-md-3">
                                <p class="card-text"><?php echo $data->content ?></p>
                                <p class="card-text"><small>By Dhananjana<?php echo " "." - "." ".timespan($data->last_updated, time(), 2);?></small></p>
                            </div>
                        </div>
                        <br>
                    </div>

            <?php
        }
    }
    ?>
        <br><br>
        <div class="col-lg-7"><a href="<?php echo base_url().'question';?>" class="btn btn-success">Back</a></div>
    <?php $this->view('comments/create'); ?>
        <br><br><br><br><br><br>
    </div>
        <br><br><br><br>
    </div>
</div>