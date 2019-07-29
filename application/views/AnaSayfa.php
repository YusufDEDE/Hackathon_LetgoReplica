<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script>
  $(document).ready(function(){
    $("#myInput").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#myTable tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });
  </script>

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
    <h1>Hoşgeldiniz</h1>



  </div>
</div>

<div class="container-fluid bg-4 text-center">

</nav>
<br><br><br>
<div class="container">
  <h2>Ürünler Listesi</h2>
  <p>Ürünleri arama kutusuna yazarak flitreleme yapabilirsin!</p>
  <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Ürün Adı</th>
        <th>Kategori</th>
        <th>Ürün Açiklama</th>
        <th>Ürün Durumu</th>

      </tr>
    </thead>
    <tbody id="myTable">
      <?php


        foreach ($uruns as $row) {
        echo "<tr>";
        echo "<td>".$row->urun_adi."</td>";
        echo "<td>".$row->kategori_adi."</td>";
        echo "<td>".$row->urun_aciklama."</td>";
        switch ($row->urun_durumu) {
           case 0:
            echo "<td>satılık</td>";
            break;

           case 1:
              echo "<td>revize</td>";
              break;

           case 2:
              echo "<td>satıldı</td>";
              break;

        }
        echo "</tr>";

        }
       ?>

    </tbody>
  </table>


</div>
  </div>
</div><br><br>

<footer class="container-fluid text-center">
    <p>Copyright ©2018 KaizerTech</p>
</footer>

</body>
</html>
