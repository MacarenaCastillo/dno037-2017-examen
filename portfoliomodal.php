<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>MC Design Port</title>
  <!-- TAGS -->
  <!-- Search Engine -->
  <meta name="description" content="Macarena Castillo's Portafolio. Contains illustrations, renders and other forms of design.">
  <meta name="image" content="http://mcdesignport.cl/img/profile.png">
  <!-- Schema.org for Google -->
  <meta itemprop="name" content="MC Design Port">
  <meta itemprop="description" content="Macarena Castillo's Portafolio. Contains illustrations, renders and other forms of design.">
  <meta itemprop="image" content="http://mcdesignport.cl/img/profile.png">
  <!-- Twitter -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:title" content="MC Design Port">
  <meta name="twitter:description" content="Macarena Castillo's Portafolio. Contains illustrations, renders and other forms of design.">
  <meta name="twitter:image:src" content="http://mcdesignport.cl/img/profile.png">
  <!-- Open Graph general (Facebook, Pinterest & Google+) -->
  <meta name="og:title" content="MC Design Port">
  <meta name="og:description" content="Macarena Castillo's Portafolio. Contains illustrations, renders and other forms of design.">
  <meta name="og:image" content="http://mcdesignport.cl/img/profile.png">
  <meta name="og:url" content="www.mcdesignport.cl">
  <meta name="og:site_name" content="MC Design Port">
  <meta name="og:locale" content="en_US">
  <meta name="og:type" content="website">


    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/freelancer.min.css" rel="stylesheet">
    <link href="css/fixes.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Oswald:500,700|Roboto:300,400" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<?php
$inspiracion = array_map('str_getcsv', file('data/blog.csv'));
array_walk($inspiracion, function(&$a) use ($inspiracion) {$a = array_combine($inspiracion[0], $a);});
array_shift($inspiracion);
$all = count($inspiracion);
for($n=0; $n < $all; $n++){
?>
<div class="portfolio-modal modal fade" id="portfolioModal<?php print $n?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        <h2><?php print($inspiracion[$n]["title"])?></h2>
                        <hr class="star-primary">
                        <p> <?php print($inspiracion[$n]["description"])?> </p>
                        <img src="<?php print($inspiracion[$n]["img1"])?>" class="img-responsive img-centered" alt="<?php print ($inspiracion[$n]["alt"]) ?>">
                        <?php if ($inspiracion[$n]["val"] > 1) { ?> <img src="<?php print($inspiracion[$n]["img2"])?>" class="img-responsive img-centered" alt="<?php print ($inspiracion[$n]["alt"]) ?>"> <?php };?>
                        <?php if ($inspiracion[$n]["val"] > 2) { ?> <img src="<?php print($inspiracion[$n]["img3"])?>" class="img-responsive img-centered" alt="<?php print ($inspiracion[$n]["alt"]) ?>"> <?php };?>
                        <?php if ($inspiracion[$n]["val"] > 3) { ?> <img src="<?php print($inspiracion[$n]["img4"])?>" class="img-responsive img-centered" alt="<?php print ($inspiracion[$n]["alt"]) ?>"> <?php };?>
                        <ul class="list-inline item-details">
                            <li>Client:
                                <strong><?php print($inspiracion[$n]["client"])?></a>
                                </strong>
                            </li>
                            <li>Date:
                                <strong><?php print($inspiracion[$n]["date"])?></a>
                                </strong>
                            </li>
                        </ul>
                        <button type="button" class="btn btn-close" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php };?>
</body>
</html>
