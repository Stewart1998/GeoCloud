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
    <div class="page-title">Inovate</div>
		<div class="page-sub-title">BitCoin</div>
    <svg class="bitcoin-line-chart"></svg>
    </div>
</main>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="<?php echo $ini['app_url']; ?>/assets/js/main.js"></script>
    <script src="<?php echo $ini['app_url']; ?>/assets/js/bitcoin.js"></script>
    <script src="https://d3js.org/d3.v5.min.js"></script>
</body>
</html>