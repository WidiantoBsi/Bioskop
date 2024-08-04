<?php $this->load->view('templates/Header_Table') ?>
<!-- page content -->
<div id="content">
  <div class="panel box-shadow-none content-header">
    <div class="panel-body">
      <div class="col-md-12">
        <h3 class="animated fadeInLeft">Form Film</h3>
        <p class="animated fadeInDown">
          Form <span class="fa-angle-right fa"></span> Film
        </p>
      </div>
    </div>
  </div>
  <div class="col-md-12 padding-0">
    <div class="col-md-12">
      <div class="panel form-element-padding">
        <div class="panel-heading">
         <h4>Film Info</h4>
       </div>
       <div class="panel-body" style="padding-bottom:30px;">
        <div class="col-md-12">

          <form action="<?php echo $Action ?>" class="form-horizontal form-label-left" method="post" enctype="multipart/form-data">

					<div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">ID Film <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" class="form-control col-md-7 col-xs-12" placehoder="Masukan ID Film" name="ID_Film" value="<?php echo $ID_Film ?>" >
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Nama Film <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" placehoder="Masukan Nama Film" name="Nama_Film" value="<?php echo $Nama_Film ?>" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Deskripsi <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="Deskripsi"  placehoder="Masukan Deskripsi" name="Deskripsi" value="<?php echo $Deskripsi ?>" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Rating<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" placehoder="Masukan Rating" name="Rating" value="<?php echo $Rating ?>" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Produksi<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" placehoder="Masukan Produksi" name="Produksi" value="<?php echo $Produksi ?>" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="website">Durasi <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" placehoder="Masukan Durasi" name="Durasi" value="<?php echo $Durasi ?>" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="occupation">Country<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" placehoder="Masukan Country" name="Country" value="<?php echo $Country ?>" class="optional form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="occupation">Release<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="date" placehoder="Masukan Release" name="Release" value="<?php echo $Release ?>" class="optional form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="occupation">Poster<span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="file" name="Poster" value="<?php echo $Poster ?>" >
                      </div>
                    </div>
					<div class="ln_sol "></div>
                    <div class="form-group">
                      <div class="col-md-6 col-md-offset-3">
                        <button class="btn btn-primary waves-effect" type="submit"><?php echo $Button; ?></button>
						            <a href="<?php echo site_url('Customer'); ?>" class="btn btn-default"> Cancel</a>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
<?php $this->load->view('templates/Footer_Table') ?>