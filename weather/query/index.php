<?php include_once($_SERVER['DOCUMENT_ROOT'] . "/core/config.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <title><?php echo $ini['app_title'] ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo $ini['app_url'] ?>/assets/css/main.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $ini['app_url'] ?>/assets/css/weather-data.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" type="image/png" href="<?php echo $ini['app_url'] ?>/assets/img/favicon.jpg" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>

<body onLoad="getWeather('<?php echo $_GET['id'] ?>')" class="nobg">
    <?php include_once($ini['app_dir'] . "/templates/header.html") ?>
    <?php include_once($ini['app_dir'] . "/templates/nav.html") ?>
    <main>
        <div class="weather-header">
            <div class="header_title">GeoCloud Weather</div>
            <form class="search_form" id="search_form">
                <div class="row bg grid">
                    <div class="col"><input type="text" name="country" id="autocomplete" autocomplete="off"> </div>
                    <div class="col"> <input type="submit" value="" id="currentLocation"> </div>
                </div>
                <div class="row center">
                    <button>Search</button>
                    <button>Enter Coordinates</button>
                </div>
            </form>
        </div>
        <div class="banner" id="banner"></div>
        <div class="wrap">
            <div class="page_title"></div>
            <div class="weather_wrap">
                <div class="weather_title">Current</div>
                <img class="weather_img" src="">
                <div class="weather_low">
                    <div class="text">Low</div>
                    <div id="low"></div>
                </div>
                <div class="weather_description"> </div>
            </div>
            <div class="wrap2" id="small_wrap">
                <div class="weather_wrap small" style="display: none;">
                    <div class="weather_title">Date</div>
                    <img class="weather_img" src="">
                    <div class="weather_low">
                        <div class="high">High</div>
                        <div class="low">Low</div>
                    </div>
                </div>
            </div>
        </div>
        <div id="weather"></div>
        <div class="weather_main">
            <div class="weather_container" id="weather_container"></div>
        </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="<?php echo $ini['app_url']; ?>/assets/js/main.js"></script>
    <script type="text/javascript" src="<?php echo $ini['app_url']; ?>/assets/js/jquery.autocomplete.js"></script>
    <script src="<?php echo $ini['app_url']; ?>/assets/js/weather.js"></script>
</body>

</html> 