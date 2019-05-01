<div class="container-fluid" style="padding-bottom: 5em;">
    <div class="row" style="background-color: #F5F5F5; padding-left: 20vh; padding-right: 20vh;padding-top: 7em; color: grey;">
      <small><a href="#" style="text-decoration: none; color: black;">HOME</a> / CART</small>
    </div>
    <div class="row" style="background-color: #F5F5F5; padding-bottom: 6vh;padding-left: 20vh; padding-right: 20vh;">
    	<h1 class="head" style="font-weight: 800;"><span style="border-bottom: 6px solid #e51937;padding-bottom: 5px;padding-top: 1em;">CA</span>RT</h1>
    </div>
    <?php $total=0; if($sepeda!=null){ ?>
    <div class="container" style="box-sizing: border-box; margin-top: 3em; width: 100%;">

    		<table style="margin-bottom: 3.7em; width: 100%">
    			<thead style="font-size: 1em; text-indent: 0; table-layout: auto; width: 100%;">
    			<tr style="box-sizing: border-box;background-color: #fafafa">
    				<th class="product-remove" style="padding: 1.68em;">&nbsp;</th>
    				<th class="product-thumbnail"style="padding: 1.68em";>&nbsp;</th>
    				<th class="product-name" align="end" style="padding: 1.68em";>Product</th>
    				<th class="product-price" align="end" style="padding: 1.68em";>Price</th>
    				<th class="product-quantity" align="end" style="padding: 1.68em";>Quantity</th>
    				<th class="product-subtotal" align="end" style="padding: 1.68em";>Total</th>
                    <!-- <th class="product-update"style="padding: 0;margin-right: 0; width: 13%;" align="right">&nbsp;</th> -->
                </tr>
    			</thead>
                <?php 
                    foreach ($sepeda as $key) {
                    # code...
                        $i=1 + $key->jumlah;
                ?>
        <form style="margin-bottom: 1.7em;" name="form" action="<?php echo base_url().'Home/updatecart/'.$key->id_cart;?>" method="post">    

                <tbody style="margin-top: 5em; margin-bottom: 5em; ">
                    <tr >
                        <th style="border-bottom: 1px solid rgba(0,0,0,0.1)">
                            <a href="<?php echo base_url().'Home/deletecart/'.$key->id_cart;?>"> <img src="<?php echo base_url().'/assets/img/delete.png'?>" style="width: 25px;height: 25px;" /></a>
                        </th>
                        <th style="border-bottom: 1px solid rgba(0,0,0,0.1)">
                            <a href="<?php echo base_url().'Home/viewsepeda/'.$key->nama;?>"> <img src="<?php echo base_url().'/assets/img/sepeda.png'?>" style="width: 70px;height: 80px;"/></a>
                        </th>
                        <th class="product-name" style="border-bottom: 1px solid rgba(0,0,0,0.1)">
                            <a href="<?php echo base_url().'Home/viewsepeda/'.$key->nama;?>" style="outline: none; color: black; margin-bottom: 0; font-weight: bolder ;font-size:18px;" name="nama"><?php echo $key->nama;?></a>
                            <dl class="variation">
                                <dt class="variation-size">size: <span class="variation-size"><?php echo $key->size;?></span></dt>
                                
                                <dt class="variation-color" >color: <span class="variation-color"><?php echo $key->color;?></span></
                            </dl>
                        </th>
                        <th style="border-bottom: 1px solid rgba(0,0,0,0.1);">
                            <p>IDR <span class="harga"><?php echo $key->harga;?></span></p>
                        </th>
                        <th style="border-bottom: 1px solid rgba(0,0,0,0.1)">
                            <input type="hidden" name="n<?= $key->id_cart;?>" value="<?= $key->id_cart; ?>">
                            <input type="number" class="jumlah" id="jumlah" name="jumlah<?= $key->id_cart;?>" value="<?php echo $key->jumlah?>" style="text-align: center;height: 52px;width: 100px;max-width: 100px;padding: 10px; outline: none;">
                            <script type="text/javascript">
                                function check(){
                                    if(document.getElementById('jumlah').value!= <?php echo $key->jumlah;?> ) $i= document.getElementById('jumlah').value;
                                }
                            </script>
                        </th>
                        <th style="border-bottom: 1px solid rgba(0,0,0,0.1)">
                            <p class="total">IDR <span class="total"><?php echo ($key->harga * $key->jumlah);?></span></p>
                        </th>
                    </tr>
                    <?php $total=$total + $key->harga * $key->jumlah;?>
                    
                </tbody>
            <?php } ?>
    		</table>
        <div class="row" style="margin-bottom: 3em;">
          <div class="col-2" style="margin-top: 5px;">
            <input type="text" class="form-control" placeholder="Coupon Code" style="height: 90%;width: 100%;">
          </div>
          <div class="col">

            <button type="button" class="btn btn-outline-dark">Apply Coupon</button>
          </div>
          <div class="col-3">
            <a href="<?php echo base_url().'Home/updatecart/'.$key->id_cart;?>">
               <button type="submit" class="btn btn-outline-dark" style="height: 3.3em;outline: none;">Update Cart</button>
            </a>
          </div>         
        </div>
    </form>

        <div class="row">
            <div class="col-4"></div>
            <div class="col-4"></div>
            <div class="col-4" align="right">
                <div class="row" align="left">
                    <div class="col" align="left"><h4>CART TOTALS</h4></div>
                    
                </div>
                <div class="row">
                    <div class="col" align="left"><p>SUBTOTAL</p></div>
                    <div class="col" align="right">IDR <span><?php echo $total;?></span></div>
                </div>
                <div class="row">
                    <div class="col" align="left"><p>TOTAL</p></div>
                    <div class="col" align="right" style="font-weight: bolder;">IDR <span><?php echo $total;?></span></div>
                </div>
                <div class="row">
                    <a href="<?= base_url('Checkout'); ?>"><button type="button" style="width: 100%" class="btn btn-danger">PROCEED TO CHECKOUT</button></a>
                </div>
            </div>
        </div>
     </div>
     <?php } else{ ?>
    <div class="container" style="box-sizing: border-box; margin-top: 3em; width: 100%;">
        <div class="row">
            <p><span><small>Your cart is currently empty.</small></span></p>
        </div>
        <div class="row">
            <button type="button" class="btn" style="background-color: #545353;color: white;font-weight: bolder;">Return To Shop</button>
        </div>
    </div>
    <?php }; ?>

</div>

