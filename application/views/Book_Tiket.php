<?php $this->load->view('templates/header_view');?>
<style>		

input[type=text], select {
	width: 100%;
	padding: 12px 20px;
	margin: 8px 0;
	display: inline-block;
	border: 1px solid #ccc;
	border-radius: 4px;
	box-sizing: border-box;
}

input[type=submit] {
	width: 100%;
	background-color: #4CAF50;
	color: white;
	padding: 14px 20px;
	margin: 8px 0;
	border: none;
	border-radius: 4px;
	cursor: pointer;
}

input[type=submit]:hover {
	background-color: #45a049;
}

.saya div {
	border-radius: 5px;
	background-color: #f2f2f2;
	padding: 20px;
}
.card {
	background: #fff;
	min-height: 50px;
	box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
	position: relative;
	margin-bottom: 30px;
	-webkit-border-radius: 2px;
	-moz-border-radius: 2px;
	-ms-border-radius: 2px;
	border-radius: 2px; }
	.card .atas {
		color: #555;
		padding: 20px;
		position: relative;
		border-bottom: 1px solid rgba(204, 204, 204, 0.35); }
		.card .badan {
			font-size: 14px;
			color: #555;
			padding: 20px; }
			.card .badan .col-xs-12,
			.card .badan .col-sm-12,
			.card .badan .col-md-12,
			.card .badan .col-lg-12 {
				margin-bottom: 20px; }
			</style>

			<div class="row clearfix">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="card">
						<div class="atas">
							<h2>Booking Tiket Di Karam Production</h2>
						</div>

						<div class="badan">
							<div class="saya">
								<form action="<?php echo $Action ?>" id="form_validation" method="POST">
									
									<label for="fname">Nama</label>
									<input type="hidden" id="fname" name="Username" value="<?php echo $this->session->userdata('Username_Customer'); ?>">

									<label for="country">Film</label>
									<select id="idfilm" name="ID_Film">
										<?php foreach ($ID_Film as $key => $value) { ?>
										<option value="<?php echo $value->ID_Film; ?>"><?php echo $value->Nama_Film;?></option>
										<?php } ?>
									</select>

									<label for="country">Jadwal</label>
									<select id="country" name="ID_Jadwal">
										<option value="#">Select Jadwal</option>
									</select>

									<label for="country">Studio</label>
									<select id="idstudio" name="ID_Studio">
										<?php foreach ($ID_Studio as $key => $value) { ?>
										<option value="<?php echo $value->ID_Studio	; ?>"><?php echo $value->Nama_Studio;?></option>
										<?php } ?>
									</select>

									<label for="country">Kursi</label>
									<select id="country" name="ID_Kursi">
										<option value="#">Select Kursi</option>
									</select>

									
									<input type="hidden" id="fname" name="Username_Petugas" value="Select Petugas">
									<input type="hidden" id="fname" name="Status" value="Booking">
									<input type="hidden" id="fname" name="ID_Tiket" value="<?php echo $ID_Tiket; ?>" >	
									<input type="submit" value="Submit">
								</form>
							</div>
						</div>	
					</div>	
				</div>
			</div>

			<?php $this->load->view('templates/footer_view'); ?>
			<script type="text/javascript">


    $(document).ready(function() {

        $('#idfilm').on('change', function() {

            var stateID = $(this).val();
            //alert(stateID);
            if(stateID) {

                $.ajax({

                    url: 'http://localhost/Bioskop/Book_Tiket/JadwalFilm/'+stateID,

                    type: "GET",

                    dataType: "json",

                    success:function(data) {
                    	console.log(data);
                        $('select[name="ID_Jadwal"]').empty();

                        $.each(data, function(key, value) {

                            $('select[name="ID_Jadwal"]').append('<option value="'+ value.ID_Jadwal +'">'+ value.Tanggal_Dan_Jam +'</option>');

                        });

                    }

                });

            }else{

                $('select[name="ID_Jadwal"]').empty();

            }

        });

        $('#idstudio').on('change', function() {

            var stateID = $(this).val();
            if(stateID) {

                $.ajax({

                    url: 'http://localhost/Bioskop/Book_Tiket/StudioKursi/'+stateID,

                    type: "GET",

                    dataType: "json",

                    success:function(data) {
                    	console.log(data);
                        $('select[name="ID_Kursi"]').empty();

                        $.each(data, function(key, value) {

                            $('select[name="ID_Kursi"]').append('<option value="'+ value.ID_Kursi +'">'+ value.Nama_Kursi +'</option>');

                        });

                    }

                });

            }else{

                $('select[name="ID_Kursi"]').empty();

            }

        });

    });

</script>
			



