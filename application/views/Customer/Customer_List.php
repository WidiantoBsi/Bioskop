<?php $this->load->view('templates/Header_Table') ?>
<!-- start: Content -->
            <div id="content">
               <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Customer List</h3>
                        <p class="animated fadeInDown">
                          Table <span class="fa-angle-right fa"></span> Customer
                        </p>
                    </div>
                  </div>
              </div>
              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3>Customer List</h3></div>
                    <div class="panel-body">
                      <div class="responsive-table">
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
							<tr>
								<th>Username</th>
								<th>Nama Customer</th>
								<th>No HP</th>
								<th>Email</th>
								<th>Alamat</th>
								<th>Jenis Kelamin</th>
								<th>Action</th>
							</tr>
					</thead>
					<tbody>
						<?php foreach ($Customer as $key => $value) {?>
						<tr>
							<td><?php echo $value->Username; ?></td>
							<td><?php echo $value->Nama_Customer; ?></td>
							<td><?php echo $value->No_HP; ?></td>
							<td><?php echo $value->Email; ?></td>
							<td><?php echo $value->Alamat; ?></td>
							<td><?php echo $value->Jenis_Kelamin; ?></td>
							<td><?php echo anchor(site_url('Customer/hapus/'.$value->Username), '<i class="fa fa-trash-o"></i>');
							?>
								<?php echo anchor(site_url('Customer/edit/'.$value->Username), '<i class="fa fa-edit"></i>');
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
