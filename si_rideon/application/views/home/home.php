<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<head>

	<title>Welcome to CodeIgniter</title>
<style type="text/css">
.cours2{
	position:relative;
	margin-bottom:50px;
	margin-top:30px;

}

.cours2:hover .hover{
	transform:scale(1.1);
	transition:0.4s;
}

}
</style>
</head>

<body>
	<div class="overlay"></div>
  	<video width="100%" height="100%" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    	<source src="https://www.polygonbikes.com/wp-content/uploads/2019/03/DH-WEBSITE.mp4" type="video/mp4">
  	</video>
	  <div class="container h-100">
	    <div class="d-flex h-100 text-center align-items-center">
	      <div class="w-100 text-white">
	        <h1 class="display-3">Video Header</h1>
	        <p class="lead mb-0">With HTML5 Video and Bootstrap 4</p>
	      </div>
	    </div>
	  </div>
	  <h1 style="text-align: center; font-weight: bolder;"><strong>PILIH SEPEDAMU</strong></h1>
	  <p style="text-align: center;" >Polygon Bikes menawarkan rangkaian sepeda berkualitas dengan teknologi terdepan yang sesuai dengan kebutuhan bersepeda anda!</p>
	
	  <div class="categories">
	  	<div class="row">
	  		<div class="col-md-3">
	  			<div class="cours2 " style="overflow:hidden;">
	  				<a href="#" class="bike-top">
	  					<div class="bike-image">
	  						<img class="hover" img src="https://www.polygonbikes.com/wp-content/uploads/2019/01/ROAD-Cover.jpg" style="width:500px;height:400px;border:2px solid transparent;transition:0.5s;">
	  					</div>
	  					<h3 class="title">
	  						<span></span>
	  					</h3>
	  				</a>
	  				<div class="bike-bottom"></div>
	  			</div>
	  		</div>
	  		<div class="col-md-3">
	  			<div class="cours2" style="overflow:hidden;">
	  				<a href="#" class="bike-top">
	  					<div class="bike-image">
	  						<img class="hover" src="https://www.polygonbikes.com/wp-content/uploads/2018/09/XQUARONE-DH-SAM-RIDING-2.jpg" style="width:500px;height:400px;border:1px solid transparent;transition:0.5s;">
	  					</div>
	  					<h3 class="title">
	  						<span></span>
	  					</h3>
	  				</a>
	  				<div class="bike-bottom"></div>
	  			</div>
	  		</div>
	  		<div class="col-md-3">
	  			<div class="cours2" style="overflow:hidden;">
	  				<a href="#" class="bike-top">
	  					<div class="bike-image">
	  						<img class="hover" src="https://www.polygonbikes.com/wp-content/uploads/2019/03/URBAN-COVER2.jpg" style="width:500px;height:400px;border:1px solid transparent;transition:0.5s;">
	  					</div>
	  					<h3 class="title">
	  						<span></span>
	  					</h3>
	  				</a>
	  				<div class="bike-bottom"></div>
	  			</div>
	  		</div>
	  		<div class="col-md-3">
	  			<div class="cours2" style="overflow:hidden;">
	  				<a href="<?php echo base_url().'Home/viewsepeda';?>" class="bike-top">
	  					<div class="bike-image">
	  						<img class="hover" src="https://www.polygonbikes.com/wp-content/uploads/2019/03/COVER-KIDS-12.jpg" style="width:500px;height:400px;border:1px solid transparent;transition:0.5s;">

	  					</div>
	  					<h3 class="title">
	  						<span></span>
	  					</h3>
	  				</a>
	  				<div class="bike-bottom"></div>
	  			</div>
	  		</div>
	  	</div>
	  </div>



	  <div class="ulasan bg-light">
	  		<h1> </h1><br><br>
	  		<h1 id="judul" style=" text-align: center; font-weight: bolder;"><strong> ULASAN SEPEDA</strong></h1><br>
	  		<p style="text-align: center;" >Temukan kumpulan ulasan sepeda Polygon dari editor media internasional yang berkompeten</p>
	  		<h1></h1><br><br>

	  		<div class="container bg-white justify-content-center" align="center;" >
	  			<div class="row">
	  			<div class="col" style="padding-top: 3%;padding-left: 4%;">
	  				<img width="300" height="73" src="https://www.polygonbikes.com/wp-content/uploads/2018/03/logo-pinkbike-corporate-1-300x73.png">
	  				<div class="row" style="padding-left: 25%;">
	  					<p style="text-align: center;"><br> Review by PINK BIKE<br></p>
	  				</div>
	  				<div class="row bg-white" style="padding-left: 24%;"><a href="<?php echo base_url().'Home/viewReview';?>"><input type="button" class="btn btn-outline-dark" name="" value="READ MORE"></a></div>
	  				
	  			</div>
	  			<div class="col" style="padding-top: 3%;padding-left: 4%;">
	  				<img width="300" height="73" src="https://www.polygonbikes.com/wp-content/uploads/2018/08/loam-wolf-300x100.png">
	  				<div class="row" style="padding-left: 25%;">
	  					<p style="text-align: center;"><br> Review by THE LOAM WOLF<br></p>
	  				</div>
	  				<div class="row bg-white" style="padding-left: 31%;"><input type="button" class="btn btn-outline-dark" name="" value="READ MORE"></div>
	  			</div>
	  			<div class="col" style="padding-top: 3%;padding-left: 4%;">
	  				<img width="300" height="73" src="https://www.polygonbikes.com/wp-content/uploads/2018/03/bike-rumor1-300x100.jpg">
	  				<div class="row" style="padding-left: 24%;">
	  					<p style="text-align: center;"><br> Review by BIKE RUMOR<br></p>
	  				</div>
	  				<div class="row bg-white" style="padding-left: 25%;"><input type="button" class="btn btn-outline-dark" name="" value="READ MORE"></div>
	  				<p> <br></p>
	  			</div>
	  			</div>
	  		</div>
	  		<h1><br><br></h1>
	  </div>

	  <div>
	  	<div>
	  		<h1 style="text-align: center; font-weight: bolder; padding-top: 2em;"><STRONG>BERITA TERBARU</STRONG> </h1>
	  		<p style="text-align: center; padding-top: 1em;" >Temukan update terbaru dari Polygon Bikes</p>
	  	</div>
	  	<div class="row" style="padding-left: 6em; padding-bottom: 8em;">
	  		<div class="col-lg-4">
	  			<a href=""><img src="https://www.polygonbikes.com/wp-content/uploads/2019/04/Cover-AO-300x200.png"></a>
	  			<div class="row" style="padding-left: 1em;">
	  				<p><small>April 12</small></p>
	  			</div>
	  			<div>
	  				<a href="" style="color: black; font-weight: bolder;"><strong>TRACEY HANNAH MENANGKAN GELAR JUARA NASIONAL AUSTRALIA KE-11 KALINYA!</strong></a>
	  			</div>
	  		</div>
	  		<div class="col-lg-4">
	  			<a href=""><img src="https://www.polygonbikes.com/wp-content/uploads/2019/03/COVER--300x200.png"></a>
	  			<div class="row" style="padding-left: 1em;">
	  				<p><small>April 12</small></p>
	  			</div>
	  			<div>
	  				<a href="" style="color: black; font-weight: bolder;"><strong>MENGENAL SEJARAH DAN MUNCULNYA SEPEDA DI INDONESIA</strong></a>
	  			</div>
	  		</div>
	  		<div class="col-lg-4">
	  			<a href=""><img src="https://www.polygonbikes.com/wp-content/uploads/2019/03/Cover-ACTy-300x200.jpg"></a>
	  			<div class="row" style="padding-left: 1em;">
	  				<p><small>April 12</small></p>
	  			</div>
	  			<div>
	  				<a href="" style="color: black; font-weight: bolder;"><strong>WORKSHOP ACTY UNTUK PENGEMBANGAN SKILL</strong></a>
	  			</div>
	  		</div>
	  	</div>
	  	
	  </div>
				

    
</body>
</html>