

<div class="container-fluid" >
  <?php foreach($sepeda as $key){?>
    <div class="row" style="background-color: #F5F5F5; padding-left: 20vh; padding-right: 20vh;padding-top: 7em; color: grey;">
      <small><a href="#" style="text-decoration: none; color: black;">HOME</a> / <a href="#" style="text-decoration: none; color: black;">SHOP</a> / <a href="#" style="text-decoration: none; color: black;">BIKES</a> / <?php echo $key->nama;?></small>
    </div>
    <div class="row" style="background-color: #F5F5F5; padding-bottom: 6vh;padding-left: 20vh; padding-right: 20vh;padding-top: 0.7em;">
      <h1 class="head" style="font-weight: bolder;"><span style="border-bottom: 2px solid red;border-bottom-height: 30px;"><?php echo $key->nama;?></span></h1>
      
    </div>
    
	      
</div>
    

<div class="row" style="padding-left: 10vh; margin-top: 8vh;">
    <div class="row" style="padding-left: 2vh">
      <div class="col-7" >
        <div class="row">
          <img src="<?php echo base_url().'assets/img/'.$key->nama?>.png" height="100%" width="100%">
        </div>
      </div>
      <div class="col-4 data" style="padding-left: 8vh">
        <div class="row">
          <h3>IDR. <?php echo $key->harga;?></h3>
        </div>
        <div class="row">
          <p><?= $key->description; ?></p>
        </div>
        <div class="row">
          <div class="col-4" style="padding-top: 8px; padding-left: 0;">SIZE</div>
          <div class="col">
            <div class="form-group">
              <select class="custom-select form-control-sm bg-light" id="sel1" >
                <option>CHOOSE AN OPTION</option>
                <option><?php echo $key->size?></option>
               
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-4" style="padding-top: 8px; padding-left: 0">COLOR</div>
          <div class="col">
            <div class="form-group">
              <select class="custom-select form-control-sm bg-light" id="sel1" >
                <option>CHOOSE AND OPTION</option>
                <option><?php echo $key->color;?></option>

              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-3" style="padding-top: 14px; padding-left: 0">
              <input type="number" class="input-text qty text" name="quantity" min="1" max="1" size="1" value="1" style="padding-left: 2em" >
          </div>
          <div class="col" style="padding-left: 0">
            <a href="<?php echo base_url().'Home/addtocart/'.$key->id_sepeda;?>">
              <input type="button" class="btn btn-outline-dark" name="" value="Add To Cart">
            </a>
          </div>
        </div>
      </div>
    </div>
</div>  
    <nav>
          <div class="nav nav-tabs nav-fill border-bottom" id="nav-tab" role="tablist" style="padding-right: 20em; padding-left: 20em;">
            <a class="nav-item nav-link active" id="nav-desc-tab" data-toggle="tab" href="#nav-desc" role="tab" aria-controls="nav-desc" aria-selected="true" style="display: inline-block; color: gray;">DESCRIPTION</a>
            <a class="nav-item nav-link" id="nav-spec-tab" data-toggle="tab" href="#nav-spec" role="tab" aria-controls="nav-spec" aria-selected="false" style="display: inline-block; color: gray;">SPECIFICATION</a>
          </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
          <div class="tab-pane fade show active" id="nav-desc" role="tabpanel" aria-labelledby="nav-desc-tab" style="padding-right: 5em; padding-left: 5em; padding-top: 4em; padding-bottom: 4em; "><?php echo $key->description;?>
          </div>
          <div class="tab-pane fade" id="nav-spec" role="tabpanel" aria-labelledby="nav-spec-tab" style="padding-right: 5em; padding-left: 5em; padding-top: 4em; padding-bottom: 4em; ">
            <div class="container-fluid">
            <div class="row border-bottom" style="padding-bottom: 1em; padding-top: 1em;">
              <div class="col-sm-2" style="font-weight: bolder;">Frame</div>
              <div class="col"><?php echo $key->Frame;?></div>
            </div>
            <div class="row border-bottom" style="padding-bottom: 1em; padding-top: 1em;">
              <div class="col-sm-2" style="font-weight: bolder;">Fork</div>
              <div class="col"><?php echo $key->Fork;?></div>
            </div>
            <div class="row border-bottom" style="padding-bottom: 1em; padding-top: 1em;">
              <div class="col-sm-2" style="font-weight: bolder;">Color</div>
              <div class="col"><?php echo $key->color;?></div>
            </div>
            <div class="row border-bottom" style="padding-bottom: 1em; padding-top: 1em;">
              <div class="col-sm-2" style="font-weight: bolder;">Shifter</div>
              <div class="col"><?php echo $key->Shifter;?></div>
            </div>
            <div class="row border-bottom" style="padding-bottom: 1em; padding-top: 1em;">
              <div class="col-sm-2" style="font-weight: bolder;">Pedal</div>
              <div class="col"><?php echo $key->Pedal;?></div>
            </div>
          </div>
          </div>
        </div>
      <?php }?>
        <div>
          <div class="related" style="padding-bottom: 10em">
            <div>
              <h5 class="border-bottom" align="center" style="padding-bottom: 8px;">RELATED PRODUCTS</h5>
            </div>
            <div class="row" style="padding-right: 7em; padding-left: 7em; padding-top: 2em">
              <div class="col-md-4">
                <div class="border" style="overflow:hidden;">
                  <a href="#" class="bike-top">
                    <div class="bike-image">
                      <img class="hover" img src="https://www.polygonbikes.com/wp-content/uploads/2019/01/ROAD-Cover.jpg" style="width:500px;height:400px;border:2px solid transparent;transition:1s;">
                    </div>
                  </a>
                <div class="bike-bottom"></div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="border" style="overflow:hidden;">
                <a href="#" class="bike-top">
                  <div class="bike-image">
                    <img class="hover" img src="https://www.polygonbikes.com/wp-content/uploads/2018/09/XQUARONE-DH-SAM-RIDING-2.jpg" style="width:500px;height:400px;border:1px solid transparent;transition:1s;">
                  </div>
                </a>
                <div class="bike-bottom"></div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="border" style="overflow:hidden;">
                <a href="#" class="bike-top">
                  <div class="bike-image">
                    <img class="hover" img src="https://www.polygonbikes.com/wp-content/uploads/2019/03/URBAN-COVER2.jpg" style="width:600px;height:400px;border:1px solid transparent;transition:1s;">
                  </div>
                </a>
              <div class="bike-bottom"></div>
          </div>
        </div>
      </div>
    </div>



