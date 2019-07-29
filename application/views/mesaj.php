<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
  <li><a href="<?php echo base_url('user/talepler'); ?>">Taleblerim</a></li>
  <li><a href="<?php echo base_url('user/harita'); ?>">Harita</a></li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="<?php echo base_url('user/user_logout'); ?>"><span class="glyphicon glyphicon-log-in"></span> Çıkış Yap</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron">
  <div class="container text-center">
    <h1>Mesajlar</h1>
    <p></p>
  </div>
</div>

<div class="container-fluid bg-4 text-center">
  <h3></h3><br>
  <div class="row">

    </div>

  </div>
</div><br>

<div class="container-fluid bg-3 text-center">
  <div class="row">
    <div class="col-md-3">
  <form>
  <div class="form-group">
    <label for="formGroupExampleInput">Alıcıyı Şeçin </label>

  <select class="form-control">
  <option>Yusuf</option>
  <option>Yunus</option>
  <option>Cem</option>
  <option>Emran</option>
</select>
	<br>

	<label for="formGroupExampleInput">Mesajınızı girin</label>
    <input type="text" class="form-control" id="urunAciklama" placeholder="">
  </div>
<br>
<button type="button" class="btn btn-primary">Ekle</button>
</form>
    </div>
    <div class="col-md-9" id="mesajlar">
  <form>

  <ul class="list-group">
  <li class="list-group-item active">Mesajlar</li>
  <li class="list-group-item">Ürün değeri nedir?</li>
  <li class="list-group-item">Elde alışveriş mümkün mü?</li>
  <li class="list-group-item">Lehim Makinesinin durumu nedir?</li>
  <li class="list-group-item">Ferrari için enson kaç istiyorsun?</li>
</ul>
</form>
    </div>
  </div>
</div><br><br><br><br>


<footer class="container-fluid text-center">
  <p>Copyright ©2018 KaizerTech</p>
</footer>

</body>
</html>