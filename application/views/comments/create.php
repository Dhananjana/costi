


<div class="col-lg-4">
    <a href="#" class="btn btn-info" data-toggle="modal" data-target="#modal_comment">
        Add a comment
    </a>
    <br> <br> <br>
</div>


<script src="<?php echo base_url().'assets/js/tinymce/jquery.tinymce.min.js';?>"></script>
<script src="<?php echo base_url().'assets/js/tinymce/tinymce.min.js';?>"></script>
<script>
    tinymce.init({
        selector:'#myTextarea1',
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


