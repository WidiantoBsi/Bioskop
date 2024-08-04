<?php $this->load->view('templates/header_view');?>
<div class="review-slider">
	<ul id="flexiselDemo1">
		<?php foreach ($Film as $key => $value) {?>
		<li><img src="<?php echo base_url().'Uploads/'.$value->Poster ?>" alt="" width="200px" height="300px" /></li>
		<?php } ?>
	</ul>
	<script type="text/javascript">
		$(window).load(function() {
			
			$("#flexiselDemo1").flexisel({
				visibleItems: 6,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,    		
				pauseOnHover: false,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: { 
					portrait: { 
						changePoint:480,
						visibleItems: 2
					}, 
					landscape: { 
						changePoint:640,
						visibleItems: 3
					},
					tablet: { 
						changePoint:768,
						visibleItems: 4
					}
				}
			});
		});
	</script>
	<script type="text/javascript" src="<?php echo base_url('assets2js/jquery.flexisel.js') ?>"></script>	
</div>
<!-- start: Content -->
<div id="content">
	<div class="panel box-shadow-none content-header">
		<div class="panel-body">
		</div>
	</div>
	<div class="col-md-12 top-20 padding-0">
		<div class="col-md-12">
			<br>
			<div class="panel">
				<div class="panel-heading"><h3>Tiket List</h3></div>
				<div class="panel-body">
					<div class="responsive-table">
						<table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
							<thead>
								<tr>
									<th>Nama Customer</th>
									<th>Film</th>
									<th>Tanggal Dan Jadwal</th>
									<th>Kursi</th>
									<th>Studio</th>
									<th>Status</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($Tiket as $key => $value) {?>
								<tr>

									<td><?php echo $value->Nama_Customer; ?></td>
									<td><?php echo $value->Nama_Film; ?></td>
									<td><?php echo $value->Tanggal_Dan_Jam; ?></td>
									<td><?php echo $value->Nama_Kursi; ?></td>
									<td><?php echo $value->Nama_Studio; ?></td>
									<td><?php echo $value->Status; ?></td>
									<td><?php echo anchor(site_url('Tiket/hapus/'.$value->ID_Tiket), '<font color=red>Delete</font>');
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
<script type="text/javascript" src="<?php echo base_url('assets2/js/jquery.flexisel.js') ?>"></script>	
<?php $this->load->view('templates/footer_view');?>