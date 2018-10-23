<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Design System for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <!-- <meta http-equiv="refresh" content="5"> -->
  <?php
include('koneksi.php');
//proses ambil data sms dari inbox
$query="SELECT SenderNumber, TextDecoded FROM inbox";
$inbox=mysql_query($query);
$data=mysql_fetch_assoc($inbox);


$pengirim=$data['SenderNumber'];
$isi=strtoupper($data['TextDecoded']);

$pisah=explode('#',$isi);
$perintah=$pisah[0];
$calon=$pisah[1];



  if($perintah=='GREGET') {
    $polling="INSERT INTO pemilu VALUES('','$calon','1')";
    $insert=mysql_query($polling);   
  }

 

  ?>  
  <title>Argon Design System - Free Design System for Bootstrap 4</title>
  <!-- Favicon -->
  <link href="./assets/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="./assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
  <link href="./assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="./assets/css/argon.css?v=1.0.1" rel="stylesheet">
  <!-- Docs CSS -->
  <link type="text/css" href="./assets/css/docs.min.css" rel="stylesheet">
  <style type="text/css">
    body {
      /*background-color: #fafafa;*/
      
    }

    #pilpres-column {
      margin-top: 3%;
    }

    h1 {
      margin-bottom: 3%;
    }

    h4 {      
      margin-top: 5%;
    }

    div.polaroid {
      width: 80%;
      background-color: white;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      margin-bottom: 25px;
      text-align: center;
      border-bottom-right-radius: 20px;
      border-bottom-left-radius: 20px;
    }

    .badge{
      font-size: 15px;
    }
  </style>
</head>

<?php 
    //suara Limbad
    $sqlLimbad="SELECT SUM(suara) AS suara FROM pemilu WHERE calon='LIMBAD'";
    $limbad=mysql_query($sqlLimbad);
    $row_limbad=mysql_fetch_assoc($limbad);
    $suaraLimbad=$row_limbad['suara'];

    //suara MadDog
    $sqlMadDog="SELECT SUM(suara) AS suara FROM pemilu WHERE calon='MADDOG'";
    $maddog=mysql_query($sqlMadDog);
    $row_madDog=mysql_fetch_assoc($maddog);
    $suaraMadDog=$row_madDog['suara'];
 ?>

<body>
  <main>
    <div class="container">
          
      <div id="pilpres-column">
      <h1 class="text-center" style=" font-weight: bold;">PILPRES GREGET 2018</h1>
       <div class="row">
          <div class="col-md-6">
            <div class="polaroid">
              <img src="http://cdn2.tstatic.net/lampung/foto/bank/images/limbad_20180325_103151.jpg" alt="Raised image" style="width:100%; height: 100%;">            
              <h3 class="text-center" style="font-weight: 800;">SILENT GREGET</h3>
              <span class="badge badge-pill badge-danger">Ketik GREGET#LIMBAD kirim ke 085706299943</span>
              <span class="badge badge-pill badge-success"><?php echo $suaraLimbad; ?></span>
              <br><br>
            </div>
          </div>            
          <div class="col-sm-6 col-md-6">
            <div class="polaroid">
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRjSHU8PXofd3Yh-gzUnSyWncnix6kQS_yBmTcSKQOCqrrRbrlC2A" alt="Raised image" style="width:100%; height: 100%;"> 
              <h3 class="text-center" style="font-weight: 800;">MAD GREGET</h3>
              <span class="text-center badge badge-pill badge-danger">Ketik GREGET#MADDOG kirim ke 085706299943</span>
              <span class="text-center badge badge-pill badge-danger"><?php echo $suaraMadDog; ?></span>
              <br><br>
            </div>
          </div>
        </div>            
      </div>
        <br>
          
          

          <div class="row">
            <div class="col-md-6 text-center">
              
              <br>
            </div>            
            <div class="col-md-6 text-center">
                       
            </div>
          </div> 


      </div>

  </main>


  <!-- Core -->
  <script src="./assets/vendor/jquery/jquery.min.js"></script>
  <script src="./assets/vendor/popper/popper.min.js"></script>
  <script src="./assets/vendor/bootstrap/bootstrap.min.js"></script>
  <script src="./assets/vendor/headroom/headroom.min.js"></script>
  <!-- Optional JS -->
  <script src="./assets/vendor/onscreen/onscreen.min.js"></script>
  <script src="./assets/vendor/nouislider/js/nouislider.min.js"></script>
  <script src="./assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
  <!-- Argon JS -->
  <script src="./assets/js/argon.js?v=1.0.1"></script>
</body>

</html>