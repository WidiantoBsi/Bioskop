<?php $this->load->view('templates/Header_Table') ?>
<div id="content">
  <div class="panel box-shadow-none content-header">
    <div class="panel-body">
      <div class="col-md-12">
        <h3 class="animated fadeInLeft">Form Tiket</h3>
        <p class="animated fadeInDown">
          Form <span class="fa-angle-right fa"></span> Tiket
        </p>
      </div>
    </div>
  </div>
    <div class="col-md-12 padding-0">
      <div class="col-md-12">
        <div class="panel form-element-padding">
          <div class="panel-heading">
           <h4>Info Tiket</h4>
         </div>
         <div class="panel-body" style="padding-bottom:30px;">
          <div class="col-md-12">
                  <form action="<?php echo $Action ?>" class="form-horizontal form-label-left" method="post">
                   

					<div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Nama Customer</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="Username" class="form-control show-tick">
                                <?php foreach ($Username as $key => $value) { ?>
                                        <option value="<?php echo $value->Username; ?>"><?php echo $value->Nama_Customer;?></option>
                                <?php } ?>
                            </select>
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Film</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="ID_Film" class="form-control show-tick">
                                <?php foreach ($ID_Film as $key => $value) { ?>
                                        <option value="<?php echo $value->ID_Film; ?>"><?php echo $value->Nama_Film;?></option>
                                <?php } ?>
                            </select>
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Jadwal</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="ID_Jadwal" class="form-control show-tick">
                                <?php foreach ($ID_Jadwal as $key => $value) { ?>
                                        <option value="<?php echo $value->ID_Jadwal; ?>"><?php echo $value->Tanggal_Dan_Jam;?></option>
                                <?php } ?>
                            </select>
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Kursi</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="ID_Kursi" class="form-control show-tick">
                                <?php foreach ($ID_Kursi as $key => $value) { ?>
                                        <option value="<?php echo $value->ID_Kursi; ?>"><?php echo $value->Nama_Kursi;?></option>
                                <?php } ?>
                            </select>
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Studio</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="ID_Studio" class="form-control show-tick">
                                <?php foreach ($ID_Studio as $key => $value) { ?>
                                        <option value="<?php echo $value->ID_Studio; ?>"><?php echo $value->Nama_Studio;?></option>
                                <?php } ?>
                            </select>
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Petugas</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="Username_Petugas" class="form-control show-tick">
                                <?php foreach ($Username_Petugas as $key => $value) { ?>
                                        <option value="<?php echo $value->Username_Petugas; ?>"><?php echo $value->Nama_Petugas;?></option>
                                <?php } ?>
                            </select>
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Status</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <select class="form-control" name="Status" value="<?php echo $Status ?>">
                          <option>Booking</option>
                          <option>Lunas</option>
                        </select>
                      </div>
                    </div>
                    <input type="hidden" id="fname" name="ID_Tiket" value="<?php echo $ID_Tiket; ?>" >
                    
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