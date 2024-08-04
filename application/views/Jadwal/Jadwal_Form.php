<?php $this->load->view('templates/Header_Table') ?>
<!-- page content -->
<div id="content">
  <div class="panel box-shadow-none content-header">
    <div class="panel-body">
      <div class="col-md-12">
        <h3 class="animated fadeInLeft">Form Jadwal</h3>
        <p class="animated fadeInDown">
          Form <span class="fa-angle-right fa"></span> Jadwal
        </p>
      </div>
    </div>
  </div>
    <div class="col-md-12 padding-0">
      <div class="col-md-12">
        <div class="panel form-element-padding">
          <div class="panel-heading">
           <h4>Info Jadwal</h4>
         </div>
         <div class="panel-body" style="padding-bottom:30px;">
          <div class="col-md-12">

                  <form action="<?php echo $Action ?>" class="form-horizontal form-label-left" method="post">
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="occupation">ID Jadwal <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" placehoder="Masukan ID_Jadwal" name="ID_Jadwal" value="<?php echo $ID_Jadwal; ?>" class="optional form-control col-md-7 col-xs-12">
                      </div>
                    </div>
					<div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="occupation">Tanggal Dan Jam <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="datetime-local" placehoder="Masukan Tanggal Dan Jam" name="Tanggal_Dan_Jam" value="<?php echo $Tanggal_Dan_Jam; ?>" class="optional form-control col-md-7 col-xs-12">
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