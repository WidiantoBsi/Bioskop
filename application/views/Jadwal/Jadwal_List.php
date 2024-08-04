<?php $this->load->view('templates/Header_Table') ?>
<!-- start: Content -->
<div id="content">
 <div class="panel box-shadow-none content-header">
  <div class="panel-body">
    <div class="col-md-12">
      <h3 class="animated fadeInLeft">Jadwal List</h3>
      <p class="animated fadeInDown">
        Table <span class="fa-angle-right fa"></span> Jadwal
      </p>
    </div>
  </div>
</div>
<div class="col-md-12 top-20 padding-0">
  <div class="col-md-12">
    <div class="panel">
      <div class="panel-heading"><h3>Jadwal List</h3></div>
      <div class="panel-body">
        <div class="responsive-table">
          <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
            <thead>
             <tr>
              <th>ID Jadwal</th>
              <th>Tanggal Dan Jam</th>
              <th>Nama Film</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
           <?php foreach ($Jadwal as $key => $value) {?>
           <tr>
            <td><?php echo $value->ID_Jadwal; ?></td>
            <td><?php echo $value->Tanggal_Dan_Jam; ?></td>
            <td><?php echo $value->Nama_Film; ?></td>
            <td><?php echo anchor(site_url('Jadwal/hapus/'.$value->ID_Jadwal), '<i class="fa fa-trash"></i>');
            ?>
            <?php echo anchor(site_url('Jadwal/edit/'.$value->ID_Jadwal), '<i class="fa fa-edit"></i>');
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
