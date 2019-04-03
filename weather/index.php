<?php include_once($_SERVER['DOCUMENT_ROOT'] . "/core/config.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <title><?php echo $ini['app_title'] ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo $ini['app_url'] ?>/assets/css/main.css" rel="stylesheet" type="text/css">
    <link href="<?php echo $ini['app_url'] ?>/assets/css/weather.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" type="image/png" href="<?php echo $ini['app_url'] ?>/assets/img/favicon.jpg" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>
<?php include_once($ini['app_dir'] . "/templates/header.html") ?>
<?php include_once($ini['app_dir'] . "/templates/nav.html") ?>
    <main>
        <div class="container">
        <div class="page_title">GeoCloud Weather</div>
        <form class="search_form" id="search_form">
                <div class="row bg grid">
                    <div class="col"><input type="text" name="country" id="autocomplete" autocomplete="off"> </div>
                    <div class="col"> <input type="submit" value="" id="currentLocation"> </div>
                </div>
                <div class="row center">
                    <button>Search</button>
                    <button>Search by Coordinates</button>
                </div>
            </form>
    </div>
    </main>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="<?php echo $ini['app_url']; ?>/assets/js/jquery.autocomplete.js"></script>
    <script src="<?php echo $ini['app_url']; ?>/assets/js/main.js"></script>
    <script src="<?php echo $ini['app_url']; ?>/assets/js/weather.js"></script>
</body>

</html> 