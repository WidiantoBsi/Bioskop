<?php $this->load->view('templates/Header_Table') ?>
<!-- start: Content -->
            <div id="content">
               <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Kursi List</h3>
                        <p class="animated fadeInDown">
                          Table <span class="fa-angle-right fa"></span> Kursi
                        </p>
                    </div>
                  </div>
              </div>
              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3>Kursi List</h3></div>
                    <div class="panel-body">
                      <div class="responsive-table">
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
							<tr>
								<th>ID Kursi</th>
								<th>Nama Kursi</th>
								<th>Nama Studio</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($Kursi as $key => $value) {?>
							<tr>
								<td><?php echo $value->ID_Kursi; ?></td>
								<td><?php echo $value->Nama_Kursi; ?></td>
								<td><?php echo $value->Nama_Studio; ?></td>
								<td><?php echo anchor(site_url('Jadwal/hapus/'.$value->ID_Kursi), '<i class="fa fa-trash"></i>');
								?>
									<?php echo anchor(site_url('Jadwal/edit/'.$value->ID_Kursi), '<i class="fa fa-edit"></i>');
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
