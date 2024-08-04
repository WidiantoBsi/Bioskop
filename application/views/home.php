<?php $this->load->view('templates/header_view');?>

<div class="review-slider">
	<ul id="flexiselDemo1">
		<?php foreach ($Film as $key => $value) {?>
		<li><img src="<?php echo base_url().'Uploads/'.$value->Poster ?>" alt="" width="200px" height="300px"/></li>
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
									<th>Poster</th>
									<th>ID Film</th>
									<th>Nama Film</th>
									<th>Deskripsi</th>
									<th>Rating</th>
									<th>Produksi</th>
									<th>Durasi</th>
									<th>Country</th>
									<th>Release</th>
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