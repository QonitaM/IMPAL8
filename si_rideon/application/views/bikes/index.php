<style>
	h1{
		color: white;
		text-align: left;
		transform: translateX(-23%);
	}
	h2{
		color: red;
		font-size: 17px;
		transform: translateY(-100%);
		font-weight: bold;
	}
	h3{
		color: black;
	}
	h4{
		color: black;
		font-size: 15px;
		text-align: center;
		font-weight: bold;
		transform: translateY(100%);
	}
	h2:before {
		content: "";
		border: 1px solid #F08080;
		position: absolute;
		width: 50%;
		top: 8px;
		left: -45px;
	}

	h2:after {
		content: "";
		border: 1px solid #F08080;
		width: 50%;
		position: absolute;
		top: 8px;
		right: -45px;
	}

</style>

<div class="container-fluid">
	<div class="row" style="background-image: url(https://www.polygonbikes.com/wp-content/uploads/2018/10/KIDS-4.jpg) ; padding-left: 30vh; padding-top: 5em; padding-bottom: 1em; padding-right: 25vh; color: white;">
		<small><a href="#" style="text-decoration: none; color: white;">HOME</a> / BIKE CATEGORY / <?= $kategori; ?></small>
		<div class="col-md py-5 px-0">
			<h1><strong><?= $kategori; ?></strong></h1>
		</div>      
	</div>
	<div class="row p-5">
		<?php foreach($sepeda as $spd){ ?>
			<div class="col-md-3 px-1 mx-5 border border-grey rounded" style=";margin-bottom: 50px;height: 100%; width: 100%;">
				<img src="<?= base_url('assets/img/'.$spd['nama'].'.png'); ?>" width="100%" height="100%">
				<h4><strong> <?= $spd['nama']; ;?> </strong></h4>
				<p align="right" style="margin-bottom: 20px; padding-bottom: 50px; transform: translateY(70%);">
					<a href="<?php echo base_url().'Home/viewsepeda/'.$spd['nama']?>"><button class="btn btn-primary btn-sm" type="submit">Lihat</button></a>
				</p>
			</div>
		<?php } ?>
	</div>
</div>