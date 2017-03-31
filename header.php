<!-- fixa knapparna och icon. font awesome -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../favicon.ico">

  <title>new news</title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">

  <!-- font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Custom styles for this template -->
  <link href="<?php echo get_template_directory_uri(); ?>/offcanvas.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/site.css" rel="stylesheet">
</head>

<body>

  <nav class="navbar navbar-toggleable-md fixed-top navbar-inverse bg-inverse">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#"><i class="fa fa-spinner fa-pulse fa-fw"></i>
<span class="sr-only">Loading...</span> NewNews</a> <!-- font awesome icon ligger här -->

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <button class="btn btn-outline-success" type="button"><a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a></button>
        </li>
        <li class="nav-item">
          <button class="btn btn-outline-success" type="button"><a class="nav-link" href="#">sample</a></button>
        </li>
        <li class="nav-item">
          <button class="btn btn-outline-success" type="button"><a class="nav-link disabled" href="#">Disabled</a></button>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
          <div class="dropdown-menu" aria-labelledby="dropdown01">
            <a class="dropdown-item" href="#">Get</a>
            <a class="dropdown-item" href="#">the fuck</a>
            <a class="dropdown-item" href="#">out</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>