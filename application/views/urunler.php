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
    <h1>Ürün Ekle</h1>
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
	</div>
    <div class="col-md-6">
  <form role="form" method="post" action="<?php echo base_url('user/urunEkle')?>">
  <div class="form-group">
    <label for="formGroupExampleInput">Ürün Adı Giriniz</label>
    <input type="text" class="form-control" name="urun_adi"  placeholder="Örneğin; Ferrari, Masserati vs.">
	<br>

	<label for="formGroupExampleInput">Ürün Açıklaması Giriniz</label>
    <input type="text" class="form-control" name="urun_aciklama"  placeholder="Örneğin; En hızlı arabalar için kaçırmayın vs.">

  </div>
  <br>
  <label for="formGroupExampleInput">Ürün Katogori Giriniz</label>

  <select class="form-control" name="urun_kategori">
    <?php foreach ( $kategoriler as $row ) : ?>
         <option value="<?php echo $row->kategori_id; ?>"><?php echo $row->kategori_adi; ?></option>
    <?php endforeach; ?>
  </select>

  <div>
  </br>
  <span class="login100-form-title p-b-34 p-t-30">
    <?php
  $success_msg= $this->session->flashdata('success_msg');
  $error_msg= $this->session->flashdata('error_msg');

      if($success_msg){
        ?>
        <div class="alert alert-success">
          <?php echo $success_msg; ?>
        </div>
      <?php
      }
      if($error_msg){
        ?>
        <div class="alert alert-danger">
          <?php echo $error_msg; ?>
        </div>
        <?php
      }
      ?>
  </span>
</div>


<br>
<button type="submit" class="btn btn-primary">Ekle</button>
</form>
    </div>
	 <div class="col-md-3">
	</div>
  </div>
</div><br><br><br><br>


<footer class="container-fluid text-center">
   <p>Copyright ©2018, KaizerTech</p>
</footer>

</body>
</html>
