<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Official</title>

    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="styles.css">
  </head>
  <body>

    <?php require('inc/navbar.php') ?>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <?php if($filename === 'index.php') :?>
              <li class="active"><a href="index.php">Overview <span class="glyphicon glyphicon-list-alt pull-right"></span></a></li>
              <li><a href="stats.php">Statistics <span class="glyphicon glyphicon-stats pull-right"></span></a></li>
            <?php elseif($filename === 'stats.php') :?>
              <li><a href="index.php">Overview <span class="glyphicon glyphicon-list-alt pull-right"></span></a></li>
              <li class="active"><a href="stats.php">Statistics <span class="glyphicon glyphicon-stats pull-right"></span></a></li>
            <?php else :?>
              <li><a href="index.php">Overview <span class="glyphicon glyphicon-list-alt pull-right"></span></a></li>
              <li><a href="stats.php">Statistics <span class="glyphicon glyphicon-stats pull-right"></span></a></li>
            <?php endif ?>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">