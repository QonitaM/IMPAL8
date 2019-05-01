<div class="container-fluid" style="padding-bottom: 5em;">
    <div class="row" style="background-color: #F5F5F5; padding-left: 20vh; padding-right: 20vh;padding-top: 7em; color: grey;">
      <small><a href="#" style="text-decoration: none; color: black;">HOME</a> / CHECKOUT</small>
    </div>
    <div class="row" style="background-color: #F5F5F5; padding-bottom: 6vh;padding-left: 20vh; padding-right: 20vh;">
    	<h1 class="head" style="font-weight: 800;"><span style="border-bottom: 6px solid #e51937;padding-bottom: 5px;padding-top: 1em;">CH</span>ECKOUT</h1>
    </div>
    <div class="row m-5">
    	<div class="col-md-5 mx-5">
    		<h5><b>Billing Detail</b></h5>
    		<div class="row border-bottom">
    			<div class="col-md-6">
		    		<p><b><small>PRODUCT</small></b></p>   				
    			</div>
    			<div class="col-md-6 text-right">
		    		<p><b><small>TOTAL</small></b></p>
    			</div>
    		</div>
    		<div class="row border-bottom">
    			<?php foreach($cart as $crt){ ?>
    			<div class="col-md-6">
		    		<p><b><small><?= $crt->nama; ?> x <?= $crt->jumlah; ?></small></b></p>
		    		<p><b><small>size : <?= $crt->size; ?></small></b></p>
		    		<p><b><small>color : <?= $crt->color; ?></small></b></p>
    			</div>
    			<div class="col-md-6 text-right">
		    		<p><b><small>IDR <?= $crt->harga*$crt->jumlah; ?></small></b></p>
    			</div>
    			<?php } ?>
    		</div>

    		<div class="row">
    			<div class="col-md-6">
		    		<p><b><small>TOTAL</small></b></p>
    			</div>
    			<div class="col-md-6 text-right">
		    		<p><b><small>IDR <?php $sum = 0; foreach($cart as $crt){$sum=$sum+$crt->harga*$crt->jumlah;}echo $sum; ?></small></b></p>
    			</div>
    		</div>
            <div class="row">
                <div class="col-md">
                    <small class="text-danger">*Cetak halaman ini dan lakukan pembayaran langsung pada offline store dengan membawa tagihan ini</small>
                </div>
            </div>
    		</div>
    	</div>
    </div>
</div>