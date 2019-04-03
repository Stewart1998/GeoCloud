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
<body>
<?php include_once($ini['app_dir'] . "/templates/header.html") ?>
<?php include_once($ini['app_dir'] . "/templates/nav.html") ?>
    <main>
    <div class="container main">
            <section>
                <div class="section_header">Welcome to Geocloud</div>
                <div class="section_body">
                    <img src="<?php echo $ini['app_url'] ?>/assets/img/home/img1.png" alt="Img1" />
                    <div class="text">
                        <p>By inputting your location into our weather page we will show you the current weather,
                            temperature, wind chill and real feel temperature in your specified location.
                        </p>
                    </div>
                </div>
            </section>
            <section>
                <div class="section_header">Eathquake Page</div>
                <div class="section_body">
                    <div class="text">
                        <p>Using our Earthquake page allows you view information about recent earthquakes across the
                            world.
                        </p>
                    </div>
                    <img src="<?php echo $ini['app_url'] ?>/assets/img/home/img2.png" alt="Img2" />
                </div>
            </section>
            <section>
                <div class="section_header">About Us</div>
                <div class="section_body">
                    <img src="<?php echo $ini['app_url'] ?>/assets/img/home/img3.png" alt="Img3" />
                    <div class="text">
                        <p>On out About us page you can find information about the individual members of the Geocloud
                            team.
                        </p>
                    </div>
                </div>
            </section>
            <section>
                <div class="section_header">Tutorials</div>
                <div class="section_body">
                    <div class="text">
                        <p>On our tutorial page you will find information regarding GeoJSON and how we used this
                            software to
                            bring you these services.</p>
                    </div>
                    <img src="<?php echo $ini['app_url'] ?>/assets/img/home/img4.png" alt="Img4" />
                </div>
            </section>
        </div>

    </main>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="<?php echo $ini['app_url']; ?>/assets/js/main.js"></script>
</body>

</html> 