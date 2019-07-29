
<html lang="en">
<head>
  <title>KaizerTech</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://api-maps.yandex.ru/2.1/?lang=en_RU&amp;apikey=6ceb7b26-e6d5-4c2c-868b-55cefb5c58b9" type="text/javascript"></script>
  <script src="<?php echo base_url('js/geolocation.js');?>"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }

    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }

	 html, body, #map {
            width: 100%; height: 100%; padding: 0; margin: 0;
     }
  </style>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Hoşgeldiniz</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo base_url('user/home'); ?>">Anasayfa</a></li>
        <li><a href="<?php echo base_url('user/urun'); ?>">Ürün Ekle</a></li>
        <li><a href="<?php echo base_url('user/mesaj'); ?>">Mesaj</a></li>
    <li><a href="<?php echo base_url('user/satinaldiklarim'); ?>">Satın Aldığım Ürünler</a></li>
    <li><a href="<?php echo base_url('user/satilanlar'); ?>">Sattığım Ürünler</a></li>
    <li><a href="<?php echo base_url('user/favoriler'); ?>">Favoriler</a></li>
  <li><a href="<?php echo base_url('user/taleplerim'); ?>">Taleblerim</a></li>
  <li><a href="<?php echo base_url('user/harita'); ?>">Harita</a></li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Çıkış Yap</a></li>
      </ul>
    </div>
  </div>
</nav><br>

<div id="map"></div>

<footer class="container-fluid text-center">
  <p>Copyright ©2018 KaizerTech</p>
</footer>


</body>
</html>
