
<div id="bckg" style="background-image:url(<?php echo base_url().'assets/images/bck2.jpg';?>);">

    <div  class="w3-card-4 w3-container" style="width:70%; margin-top: 80px;background-color: white">
        <br><br>

        <div class="box col-lg-6 col-lg-offset-3" style="border: 1px solid;border-color: #0d0d0d " >
            <?php echo form_open("question/share"); ?>
            <div class="form-group">
                <input type="hidden" name="question_id" value="<?php echo $id;?>" />
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1"><p>name * :</p></label>
                <input class="form-control" name="name" type="text" >
                <label for="exampleFormControlFile1"><p>Email * :</p></label>
                <input class="form-control" name="email" type="email" >
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success pull-right">Share your details</button>
            </div>
            <?php echo form_close();?>
            <br><br>
        </div>
        <br><br><br>
    </div>
</div>