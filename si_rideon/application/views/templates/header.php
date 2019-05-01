<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <!-- Footer -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.css" >
	<link href="<?php echo base_url()?>assets/bootstrap/css/mdb.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

    <!-- MY CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/css/stylenav.css">
    <style type="text/css">
      #itemku a:hover{ color: red; }

    	a .list-group-item:hover{
			color: red;
		}
		.data a{
			color:#222;
    </style>
    <script type="text/javascript">
      window.onscroll = function() {myFunction()};
        function myFunction() {
          var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
          if(winScroll>0){
            document.getElementById("logo").src = "<?php echo base_url()?>assets/img/logo.png";
            document.getElementById("logo").width=141;
            document.getElementById("logo").height=39;      
            document.getElementById("logo").style.marginBottom = "0px";
            document.getElementById("logo").style.marginTop = "0px";

          }else{
            document.getElementById("logo").src = "https://www.polygonbikes.com/wp-content/uploads/2017/10/mainlogo.png";
            document.getElementById("logo").width=80;
            document.getElementById("logo").height=133;
            document.getElementById("logo").style.marginBottom = "-100px";
            document.getElementById("logo").style.marginTop = "-30px";

          }
        }
       
    </script>
    <title><?php echo $title ;?></title>
</head>
	
<body >
	<nav class="navbar sticky-top navbar-expand-md navbar-light justify-content-between bg-white fluid" style="padding-left: 20vh; padding-right: 20vh;">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="navbar-brand" href="<?php echo base_url() . 'Home/index';?>"><b>RIDEON</b></a>
      </li>
    </ul>
    <ul class="navbar-nav">
      <div class="row" style="padding-right: 2em" id="itemku">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" onmouseover="this.style.color='red'" onmouseout="this.style.color='grey'" href="#" role="button" data-toggle="dropdown" style="color: grey;">BIKES</a>
            <div class="dropdown-menu">
              <a class="nav-link" onmouseover="this.style.color='red'" onmouseout="this.style.color='grey'" href="<?php echo base_url() . 'Bikes/index/road';?>" style="color: grey;">Road</a>
              <a class="nav-link" onmouseover="this.style.color='red'" onmouseout="this.style.color='grey'" href="<?php echo base_url() . 'Bikes/index/mountain';?>" style="color: grey;">Mountain</a>
              <a class="nav-link" onmouseover="this.style.color='red'" onmouseout="this.style.color='grey'" href="<?php echo base_url() . 'Bikes/index/urban';?>" style="color: grey;">Urban</a>
              <a class="nav-link" onmouseover="this.style.color='red'" onmouseout="this.style.color='grey'" href="<?php echo base_url() . 'Bikes/index/junior';?>" style="color: grey;">Junior</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" onmouseover="this.style.color='red'" onmouseout="this.style.color='grey'" href="#" style="color: grey; ">HUBUNGI KAMI</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" onmouseover="this.style.color='red'" onmouseout="this.style.color='grey'" href="#" style="color: grey; "><img src="<?php echo base_url()?>assets/img/flag.png" width="15%">INDONESIA</a>
          </li>
      </div>
      
      <div class="row border-left">
          <li class="nav-item">
            <a class="nav-link" href="<?php if($this->session->userdata('username_or_email')==''){echo base_url() . 'Home/viewlogin';}else{echo base_url() . 'Home/viewprofile';}?>" style= "color: grey"><i class="fas fa-user"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url() . 'Home/viewcart';?>" style="color: grey" id="cart"><i class="fa fa-shopping-cart"></i></a></li></a>
          </li>
      </div>
      
    </ul>
  </nav>