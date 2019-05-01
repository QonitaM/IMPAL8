<style type="text/css">
  input{height: 3.3em !important; background-color: white !important;}
</style>

<div class="container-fluid" style="padding-bottom: 5em;">
   <div class="row" style="background-color: #F5F5F5; padding-left: 20vh; padding-right: 20vh;padding-top: 7em; color: grey;">
      <small><a href="<?php echo base_url().'Home'?>" style="text-decoration: none; color: black;">HOME</a> / <a href="<?php echo base_url().'Home/viewprofile'?>" style="text-decoration: none; color: black;"> MY ACCOUNT </a> / ADDRESSES</small>
    </div>
    <div class="row" style="background-color: #F5F5F5;padding-top: 1em; padding-bottom: 6vh;padding-left: 20vh; padding-right: 20vh;">
      <h1 class="head" style="font-weight: 700;"><span style="border-bottom: 5px solid #e51937; padding-bottom: 5px;">AD</span>DRESSES</h1>
    </div>

    <div class="row" style="padding-left: 20vh; padding-right: 20vh; margin-top: 10vh;">
        <div class="row">
          <h2 style="font-weight: bolder;font-size: 34px;margin-bottom: 35px;font-weight: 700;"><span style="border-bottom: 3px solid #ccc; padding-bottom: 10px;">YO</span>UR PERSONAL SPACE</h2>
        </div>    
    </div>
    <div class="row" style="padding-left: 20vh; padding-right: 20vh; margin-top: 10px;">
      <div class="row">
          <p style="color: #545353; font-size: 23px;">Your dashboard and place to start and check permanently.</p>
      </div>
    </div>
    <div class="row" style="padding-left: 15vh; padding-right: 20vh; margin-top: 10vh;">
      <div class="col-3">
        <a href="<?php echo base_url().'/Home/viewprofile'?>" class="hover"style="text-decoration:none;background-color: none; color: #222;">
        <div class="row list-group-item" style="border-left: none; border-right: none;border-width: 1px;margin-bottom: 0; text-decoration: none;" >
          <div class="col"><strong> Dashboard</strong><img align="right" src="<?php echo base_url()?>assets/img/dash.png" style="width: 20px; height: 20px"></div>
        </div></a>
        <a href="#" class='hover' style="text-decoration:none;background-color: none;  color: #222;">
        <div class="row list-group-item" style="border-left: none; border-right: none;border-top: none;">
          <div class="col">Order<img align="right" src="<?php echo base_url()?>assets/img/shopping-cart.svg"></div>
        </div></a>
        <a href="<?php echo base_url().'/Home/viewprofile_downloads'?>" style="text-decoration:none;background-color: none; color: #222;">
        <div class="row list-group-item" style="border-left: none; border-right: none;border-top: none;">
          <div class="col">Downloads<img align="right" src="<?php echo base_url()?>assets/img/file-text.svg"></div>
        </div></a>
        <a href="#" style="text-decoration:none;background-color: none; color: red;">
        <div class="row list-group-item" style="border-left: none; border-right: none;border-top: none;">
          <div class="col">Addresses<img src="<?php echo base_url()?>assets/img/pichome.svg" align="right" style="padding-right: 0px;"></div>
          
        </div></a>
        <a href="<?php echo base_url().'/Home/viewprofile_detail'?>" style="text-decoration:none;background-color: none; color: #222;">
        <div class="row list-group-item" style="border-left: none; border-right: none;border-top: none;">
          <div class="col">Account details<img align="right" src="<?php echo base_url()?>assets/img/profile.svg"></div>
        </div></a>
        <a href="<?php echo site_url()."Home/logout"?>" style="text-decoration:none;background-color: none; color: #222;">
        <div class="row list-group-item" style="border-left: none; border-right: none;border-top: none;">
          <div class="col">Logout<img src="<?php echo base_url()?>assets/img/log-out.svg" align="right"></div>
        </div></a>
      </div>
      <div class="col data" style="padding-left: 3em;">
        <?php foreach ($user as $key) { 
          if($key->firstname!=null) $first=$key->firstname;
          else $first='';
          if($key->lastname!=null) $last=$key->lastname;
          else $last='';
          ?>
        <div class="row">
          <div class="row">
          <div class="col"><small>The following addresses will be used on the checkout page by default.</small></div>
          </div>
        </div>

        <div class="row" style="padding-top: 2em;">
          <div class="col">
            <div class="row">
              <div class="col">
              <span style="font-weight: 1000; font-size: 20px;">Billing address</span>
              </div>
              <div class="col-1">
              <a href="">
              <img width="12px" height="12px" src="<?php echo base_url().'/assets/img/edit.png';?>">
              </a>
              </div>
            </div>
            <div class="row" style="padding-top: 2em;">
              <div class="col">
                <input class="form-control" type="text" name="bill" value="<?php echo $first.' '.$last; ?>" disabled>
              </div>
            </div>
          </div>
          <div class="col-1"></div>
          <div class="col">
            <div class="row">
              <div class="col">
              <span style="font-weight: 1000;font-size: 20px;">Shipping address</span>
              </div>
              <div class="col-1">
              <a href="">
              <img width="12px" height="12px" src="<?php echo base_url().'/assets/img/edit.png';?>">
              </a>
              </div>
            </div>
            <div class="row" style="padding-top: 2em;">
              <div class="col">
                <input class="form-control" type="text" name="bill" value="You have not set up this type of address yet." disabled>
              </div>
            </div>
          </div>
            
          </div>
        <?php }?>
        </div>
      </div>
      
    </div>
  </div>