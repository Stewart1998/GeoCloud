<?php include_once($_SERVER['DOCUMENT_ROOT'] . "/core/config.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <title><?php echo $ini['app_title'] ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo $ini['app_url'] ?>/assets/css/main.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" type="image/png" href="<?php echo $ini['app_url'] ?>/assets/img/favicon.jpg" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body class="nobg">
<?php include_once($ini['app_dir'] . "/templates/header.html") ?>
<?php include_once($ini['app_dir'] . "/templates/nav.html") ?>
    <main>
    <div class="container main">
		

<div id="googleMap" style="width:100%;height:400px;"></div>
</div>
</main>

 <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> 
 <script src="<?php echo $ini['app_url']; ?>/assets/js/main.js"></script>

<script>
function EarthquakeMapper() {
var mapPosition= {
  center:new google.maps.LatLng(55.864239,-4.251806),
  zoom:5,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapPosition);
    
    //gets the last 24 hours of earthquake data from the url
    map.data.loadGeoJson(
     'https://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/all_day.geojson');
    
  
    map.data.setStyle(function(feature) {
          var magnitude = feature.getProperty('mag');
          return {
            icon: getCircle(magnitude)
          };
        });
    
    
    
      //styles the markers for the earthquakes positions cirles relative to the size of magnitude
    function getCircle(magnitude) {
        return {
          path: google.maps.SymbolPath.CIRCLE,
          fillColor: 'red',
          fillOpacity: .2,
          scale: Math.pow(2, magnitude) / 2,
          strokeColor: 'white',
          strokeWeight: .5
        };
      }
}
</script>

<!--    googles maps api key-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBo6DvkytrTUaX0fEu3rmd6pXvhea9Ar4U&callback=EarthquakeMapper"></script>

</body>
</html>