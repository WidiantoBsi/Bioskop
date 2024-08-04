<?php $this->load->view('templates/Header_Table') ?>
<!-- page content -->
<div id="content">
  <div class="panel box-shadow-none content-header">
    <div class="panel-body">
      <div class="col-md-12">
        <h3 class="animated fadeInLeft">Form Petugas</h3>
        <p class="animated fadeInDown">
          Form <span class="fa-angle-right fa"></span> Petugas
        </p>
      </div>
    </div>
  </div>
    <div class="col-md-12 padding-0">
      <div class="col-md-12">
        <div class="panel form-element-padding">
          <div class="panel-heading">
           <h4>Personal Info</h4>
         </div>
         <div class="panel-body" style="padding-bottom:30px;">
          <div class="col-md-12">

                  <form action="<?php echo $Action ?>" class="form-horizontal form-label-left" method="post">
                    
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nama <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" class="form-control col-md-7 col-xs-12" placehoder="Masukan Nama" name="Nama_Petugas" value="<?php echo $Nama_Petugas ?>" >
                      </div>
                    </div>
                     <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Username <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" class="form-control col-md-7 col-xs-12" placehoder="Masukan Username" name="Username_Petugas" value="<?php echo $Username_Petugas ?>" >
                      </div>
                    </div>
					<div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Password <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="Password"  placehoder="Masukan Password" name="Password" value="<?php echo $Password ?>" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Nomor HP <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" placehoder="Masukan No HP" name="No_HP" value="<?php echo $No_HP ?>" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="website">Email <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" placehoder="Masukan Email" name="Email" value="<?php echo $Email ?>" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="occupation">Alamat <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" placehoder="Masukan Alamat" name="Alamat" value="<?php echo $Alamat ?>" class="optional form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <select class="form-control" name="Jenis_Kelamin" value="<?php echo $Jenis_Kelamin ?>">
                          <option>Laki Laki</option>
                          <option>Perempuan</option>
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
              <?php echo $this->session->flashdata('Username'); ?>
            </div>
          </div>
        </div>
<?php $this->load->view('templates/Footer_Table') ?>