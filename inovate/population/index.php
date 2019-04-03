<?php include_once($_SERVER['DOCUMENT_ROOT'] . "/core/config.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <title><?php echo $ini['app_title'] ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo $ini['app_url'] ?>/assets/css/main.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" type="image/png" href="<?php echo $ini['app_url'] ?>/assets/img/favicon.jpg" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<style>
main{
    text-align:center;

}
#canvas{
    width: 90%;
}

</style>
</head>
<body class="nobg">
<?php include_once($ini['app_dir'] . "/templates/header.html") ?>
<?php include_once($ini['app_dir'] . "/templates/nav.html") ?>
    <main>
    <div class="container main">

    <div class="page-title">Inovate</div>
		<div class="page-sub-title">Population</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>


<canvas id="canvas" length="100%" width="100%"></canvas>
</div>
</main>

 <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> 
 <script src="<?php echo $ini['app_url']; ?>/assets/js/main.js"></script>
<script src="<?php echo $ini['app_url']; ?>/assets/js/chart.js"></script>

</body>
   