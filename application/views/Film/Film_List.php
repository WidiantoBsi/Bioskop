<?php $this->load->view('templates/Header_Table') ?>
<!-- start: Content -->
            <div id="content">
               <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Film List</h3>
                        <p class="animated fadeInDown">
                          Table <span class="fa-angle-right fa"></span> Film
                        </p>
                    </div>
                  </div>
              </div>
              <div class="col-md-12 top-20 padding-0">
                <div class="col-md-12">
                  <div class="panel">
                    <div class="panel-heading"><h3>Film List</h3></div>
                    <div class="panel-body">
                      <div class="responsive-table">
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
							<tr>
								<th>Poster</th>
								<th>ID Film</th>
								<th>Nama Film</th>
								<th>Deskripsi</th>
								<th>Rating</th>
								<th>Produksi</th>
								<th>Durasi</th>
								<th>Country</th>
								<th>Release</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($Film as $key => $value) {?>
							<tr>
								<td><img src="<?php echo base_url().'Uploads/'.$value->Poster ?>" alt="" width="100px"/></td>
								<td><?php echo $value->ID_Film; ?></td>
								<td><?php echo $value->Nama_Film; ?></td>
								<td><?php echo $value->Deskripsi; ?></td>
								<td><?php echo $value->Rating; ?></td>
								<td><?php echo $value->Produksi; ?></td>
								<td><?php echo $value->Durasi; ?></td>
								<td><?php echo $value->Country; ?></td>
								<td><?php echo $value->Release; ?></td>
								<td><?php echo anchor(site_url('Film/hapus/'.$value->ID_Film), '<i class="fa fa-trash"></i>');
								?>
									<?php echo anchor(site_url('Film/edit/'.$value->ID_Film), '<i class="fa fa-edit"></i>');
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
