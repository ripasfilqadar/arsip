<div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Detail Laporan <?php $data['perihal']?></h3>
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
								<th>Tanggal</th>
								<td> <?php
												$phpdate = strtotime( $data['tanggal'] );
												echo date( 'd-M-Y', $phpdate ) 
												 ?> </td>
							</tr>
							<tr>
								<th>Tanggal Perekaman</th>
								<td> <?php
												$phpdate = strtotime( $data['created_date'] );
												echo date( 'd-M-Y h:i:s', $phpdate ) 
												 ?> </td>
							</tr>
							<tr>
								<th>Download Naskah</th>
								<td> <a href="<?php echo base_url().'Laporan/Download/'.$data['id'].'/'.$data['file_surat']?>">  <?php echo $data['file_surat']?> (Download) </td>
							</tr>
						</tbody>
					</table>

				</div>
				
			  </div>
			</div>
		  </div>
		  <a href="<?php echo base_url().'Laporan'?> "><button class="btn btn-primary"> Kembali </button></a>
		  
		</section>
</div>
