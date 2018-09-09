<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>COSTI Sri Lanka</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/font-awesome.min.css';?>">
    <link href="<?php echo base_url().'assets/css/prettyPhoto.css';?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/css/style.css';?>" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- =======================================================
        Theme Name: Company
        Theme URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
        Author: BootstrapMade
        Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>
<body>

    
    <div class="about">
        <div class="container">
<div class="row">
    <div class="col s12">
        <ul class="tabs">
            <li class="tab col s6"><a id="m1" class="active" href="#map1-container" style="text-decoration: none;">Ongoing Issues</a></li>
            <li class="tab col s6"><a id="m2" href="#map2-container" style="text-decoration: none;">Issue Category</a></li>
        </ul>
    </div>
    <div id="map1-container">
        <div id="map1" style="height: 400px; width: 100%;" class="col s12">Map 1</div>
            <div class="chip pull-right" style="margin-top:10px;">
                <img src="assets/images/mapMarkers/map-marker-red.png" alt="Open">
                Open
            </div>
            <div class="chip pull-right" style="margin-top:10px;">
                <img src="assets/images/mapMarkers/map-marker-blue.png" alt="Open">
                In Progress
            </div>
            <div class="chip pull-right" style="margin-top:10px;">
                <img src="assets/images/mapMarkers/map-marker-green.png" alt="Open">
                Completed
            </div>
    </div>
    <div id="map2-container">
        <div id="map2"  style="height: 400px; width: 100%;" class="col s12">Map 2</div>
        <div class="chip pull-right" style="margin-top:10px;">
            <img src="<?php echo base_url().'assets/images/mapMarkers/map2-1.png';?>" alt="Open">
            Infrastructure
        </div>
        <div class="chip pull-right" style="margin-top:10px;">
            <img src="<?php echo base_url().'assets/images/mapMarkers/map2-2.png';?>" alt="Open">
            Funds
        </div>
        <div class="chip pull-right" style="margin-top:10px;">
            <img src="<?php echo base_url().'assets/images/mapMarkers/map2-3.png';?>" alt="Open">
            Human Resource and Skill Development
        </div>
        <div class="chip pull-right" style="margin-top:10px;">
            <img src="<?php echo base_url().'assets/images/mapMarkers/map2-4.png';?>" alt="Open">
            Administrative and Procurement
        </div>
        <div class="chip pull-right" style="margin-top:10px;">
            <img src="<?php echo base_url().'assets/images/mapMarkers/map2-5.png';?>" alt="Open">
            Intellectual Property Management
        </div>
        <div class="chip pull-right" style="margin-top:10px;">
            <img src="<?php echo base_url().'assets/images/mapMarkers/map2-6.png';?>" alt="Open">
            Other
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
<script src="<?php echo base_url().'assets/js/jquery-2.1.1.min.js';?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

<script>

    function initMap() {


        // Create a map object and specify the DOM element for display.
        var map1 = new google.maps.Map(document.getElementById('map1'), {
            center: {lat: 6.6363, lng:79.9528},
            zoom: 8,

        });

        var map2 = new google.maps.Map(document.getElementById('map2'), {
            center: {lat: 6.9271, lng:80.8612},
            zoom: 8,
        });

        $.ajax({
            type: 'post',
            url: '<?php echo base_url().'main/getCategory';?>',
            dataType: 'json',
            data: {},
            success: function (response) {
                $.each(response,function (i, value) {
                    var icon;
                    if(value['status'] == 'open'){
                        icon = '<?php echo base_url().'assets/images/mapMarkers/map-marker-red.png';?>';
                    }else if(value['status'] == 'inprogress'){
                        icon = '<?php echo base_url().'assets/images/mapMarkers/map-marker-blue.png';?>';
                    }else if(value['status'] == 'completed'){
                        icon = '<?php echo base_url().'assets/images/mapMarkers/map-marker-green.png';?>';
                    }
                    addMarker({coords:{lat:parseFloat(value['lat']),lng:parseFloat(value['lng'])},map:map1,icon:icon});

                    var marker;
                    if(value['category'] == 'Infrastructure'){
                        marker = '<?php echo base_url().'assets/images/mapMarkers/map2-1.png';?>';
                    }else if(value['category'] == 'Funds'){
                        marker = '<?php echo base_url().'assets/images/mapMarkers/map2-2.png';?>';
                    }else if(value['category'] == 'Human Resource and Skill Development'){
                        marker = '<?php echo base_url().'assets/images/mapMarkers/map2-3.png';?>';
                    }else if(value['category'] == 'Administrative and Procurement'){
                        marker = '<?php echo base_url().'assets/images/mapMarkers/map2-4.png';?>';
                    }else if(value['category'] == 'Intellectual Property Management'){
                        marker = '<?php echo base_url().'assets/images/mapMarkers/map2-5.png';?>';
                    }else if(value['category'] == 'Other'){
                        marker = '<?php echo base_url().'assets/images/mapMarkers/map2-6.png';?>';
                    }
                    addMarker({coords:{lat:parseFloat(value['lat']),lng:parseFloat(value['lng'])},map:map2,icon:marker});
                });
            },
            error: function (response) {
                alert("There was an error loading the locations");

            }
        });

        function addMarker(props){
            var marker = new google.maps.Marker({
                position: props.coords,
                icon: props.icon,
                map: props.map
            });
        }

    }

    
</script>
<script>
    $(document).ready(function(){
        $('ul.tabs').tabs();
    });

    $('#m2').click(function () {
        initMap();
    });

    $('#m1').click(function () {
        initMap();
    });

</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBJ6pYXkAoUVN6GhVDCgTMxMbFy6MVnNUw&callback=initMap"
        async defer>



    <footer>
        <div class="footer">
            <div class="container">
                <div class="social-icon">
                    <div class="col-md-4">
                        <ul class="social-network">
                            <li><a href="#" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="gplus tool-tip" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#" class="linkedin tool-tip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#" class="ytube tool-tip" title="You Tube"><i class="fa fa-youtube-play"></i></a></li>
                        </ul>   
                    </div>
                </div>
                
                <!-- <div class="col-md-4 col-md-offset-4">
                    <div class="copyright">
                        &copy; Company Theme. All Rights Reserved.
                        <div class="credits">
                            
                                All the links in the footer should remain intact. 
                                You can delete the links only if you purchased the pro version.
                                Licensing information: https://bootstrapmade.com/license/
                                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Company
                           
                            <a href="https://bootstrapmade.com/free-business-bootstrap-themes-website-templates/">Business Bootstrap Themes</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                        </div>
                    </div>
                </div>           -->            
            </div>
            
            <div class="pull-right">
                <a href="#home" class="scrollup"><i class="fa fa-angle-up fa-3x"></i></a>
            </div>      
        </div>

    </footer>

    
    

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url().'assets/js/jquery.prettyPhoto.js';?>"></script>
    <script src="<?php echo base_url().'assets/js/jquery.isotope.min.js';?>"></script>
    <script src="<?php echo base_url().'assets/js/functions.js';?>"></script>


</body>
</html>