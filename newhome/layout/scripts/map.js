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
            url: 'main/getCategory',
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
                        marker = '<?php echo base_url().'assets/images/mapMarkers/map-marker-red.png';?>';
                    }else if(value['category'] == 'Funds'){
                        marker = '<?php echo base_url().'assets/images/mapMarkers/map-marker-blue.png';?>';
                    }else if(value['category'] == 'Human Resource and Skill Development'){
                        marker = '<?php echo base_url().'assets/images/mapMarkers/map-marker-green.png';?>';
                    }else if(value['category'] == 'Administrative and Procurement'){
                        marker = '<?php echo base_url().'assets/images/mapMarkers/map-marker-yellow.png';?>';
                    }else if(value['category'] == 'Other'){
                        marker = '<?php echo base_url().'assets/images/mapMarkers/mk.png';?>';
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