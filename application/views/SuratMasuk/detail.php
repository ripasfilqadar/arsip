<div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Detail Surat Keluar</h3>
            </div><!-- /.box-header -->
            <div class="box-body">          
              <div class="row">
                <div class="col-md-12">

					<table class="table table-striped">
						<tbody>
							<tr>
								<th>Perihal</th>
								<th> <?php echo $data['perihal']?> </th>
							</tr>
							<tr>
								<th>Deskripsi</th>
								<th> <?php echo $data['description']?> </th>
							</tr>
							<tr>
								<th>No Surat</th>
								<th> <?php echo $data['perihal']?> </th>
							</tr>
							<tr>
								<th>Tujuan</th>
								<th> <?php echo $data['tujuan']?> </th>
							</tr>
							<tr>
								<th>Tanggal Surat</th>
								<td> <?php
												$phpdate = strtotime( $data['tanggal_surat'] );
												echo date( 'd-M-Y', $phpdate ) 
												 ?> </td>
							</tr>
							<tr>
								<th>Download Naskah</th>
								<td> <a href="<?php echo base_url().'SuratKeluar/Download/'.$data['id'].'/'.$data['file_surat']?>"> Download </td>
							</tr>
						</tbody>
					</table>

				</div>
				
			  </div>
			</div>
		  </div>
		  <a href="<?php echo base_url().'SuratKeluar'?> "><button class="btn btn-primary"> Kembali </button></a>
		  
		</section>
</div>
