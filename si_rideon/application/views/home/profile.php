<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<head>

  <title>Welcome to CodeIgniter</title>

</head>

<body>
<div class="container-fluid" style="padding-bottom: 5em;">
    <div class="row" style="background-color: #F5F5F5; padding-left: 20vh; padding-right: 20vh;padding-top: 7em; color: grey;">
      <small><a href="#" style="text-decoration: none; color: black;">HOME</a> / MY ACCOUNT</small>
    </div>
    <div class="row" style="background-color: #F5F5F5;padding-top: 1em; padding-bottom: 6vh;padding-left: 20vh; padding-right: 20vh;">
      <h1 class="head" style="font-weight: 700;"><span style="border-bottom: 5px solid #e51937; padding-bottom: 5px;">MY</span> ACCOUNT</h1>
    </div>

    <div class="row" style="padding-left: 20vh; padding-right: 20vh; margin-top: 10vh;">
        <div class="row">
          <h2 style="font-weight: bolder;font-size: 34px;margin-bottom: 35px;font-weight: 700;"><span style="border-bottom: 3px solid #ccc; padding-bottom: 10px;">YO</span>UR PERSONAL SPACE</h2>
        </div>    
    </div>
    <div class="row" style="padding-left: 20vh; padding-right: 20vh; margin-top: 10px;">
      <div class="row">
          <p style="color: grey; font-size: 23px;">Your dashboard and place to start and check permanently.</p>
      </div>
    </div>
    <div class="row" style="padding-left: 15vh; padding-right: 20vh; margin-top: 10vh;">
      <div class="col-3">
        <a href="#" class="hover"style="text-decoration:none;background-color: none; color: red;">
        <div class="row list-group-item" style="border-left: none; border-right: none;border-width: 1px;margin-bottom: 0; text-decoration: none;" >
          <div class="col"><strong> Dashboard</strong><img align="right" src="<?php echo base_url()?>assets/img/dash.png" style="width: 20px; height: 20px"></div>
        </div></a>
        <a href="<?php echo base_url().'/Home/viewprofile_orders'?>" class='hover' style="text-decoration:none;background-color: none; color: #222;">
        <div class="row list-group-item" style="border-left: none; border-right: none;border-top: none;">
          <div class="col">Order<img align="right" src="<?php echo base_url()?>assets/img/shopping-cart.svg"></div>
        </div></a>
        <a href="<?php echo base_url().'/Home/viewprofile_downloads'?>" style="text-decoration:none;background-color: none; color: #222;">
        <div class="row list-group-item" style="border-left: none; border-right: none;border-top: none;">
          <div class="col">Downloads<img align="right" src="<?php echo base_url()?>assets/img/file-text.svg"></div>
        </div></a>
        <a href="<?php echo base_url().'/Home/viewprofile_address'?>" style="text-decoration:none;background-color: none; color: #222;">
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
      <div class="col-9 data" style="padding-left: 3em;">
          <?php $str=explode('@',$this->session->userdata('username_or_email'))?>
        <div class="row">
          <p>Hello <?php echo $str[0];?>(not <?php echo $str[0];?> ? <a href="<?php echo site_url()."Home/logout"?>">Log out</a>)
          </p>
        </div>
        <div class="row">
          <p>From your account dashboard you can view your <a href="<?php echo base_url().'/Home/viewprofile_orders'?>">recent orders</a>,manage your<a href="#"> shipping and billing addresses</a>, and<a href="#"> edit your password and account details</a>.</p>

        </div>
        <div class="row"></div>
        <div class="row" align="right"><a href="<?php echo site_url().'Home/deleteakun'?>"><p style="color: red;">Delete Account</p></a></div>
      </div>
      
    </div>
  </div>
</body>
</html>