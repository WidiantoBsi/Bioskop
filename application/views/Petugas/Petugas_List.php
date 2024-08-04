
<?php $this->load->view('templates/Header_Table') ?>
<!-- start: Content -->
            <div id="content">
               <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Petugas List</h3>
                        <p class="animated fadeInDown">
                          Table <span class="fa-angle-right fa"></span> Petugas
                        </p>
                    </div>
                  </div>
              </div>
              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3>Petugas List</h3></div>
                    <div class="panel-body">
                      <div class="responsive-table">
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
							<tr>
								<th>Username</th>
								<th>Nama Petugas</th>
								<th>No HP</th>
								<th>Email</th>
								<th>Alamat</th>
								<th>Jenis Kelamin</th>
								<th>Jabatan</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($Petugas as $key => $value) {?>
							<tr>
								<td><?php echo $value->Username_Petugas; ?></td>
								<td><?php echo $value->Nama_Petugas; ?></td>
								<td><?php echo $value->No_HP; ?></td>
								<td><?php echo $value->Email; ?></td>
								<td><?php echo $value->Alamat; ?></td>
								<td><?php echo $value->Jenis_Kelamin; ?></td>
								<td><?php echo $value->Jabatan; ?></td>
								<td><?php echo anchor(site_url('Petugas/hapus/'.$value->Username_Petugas), '<i class="fa fa-trash"></i>');
								?>
									<?php echo anchor(site_url('Petugas/edit/'.$value->Username_Petugas), '<i class="fa fa-edit"></i>');
								?>
								</td>
							</tr>
							<?php } ?>
					</tbody>
				  </table>
                      </div>
                  </div>
                </div>
              </div>  
              </div>
            </div>
          <!-- end: content -->
          </div>
<?php $this->load->view('templates/Footer_Table') ?>
