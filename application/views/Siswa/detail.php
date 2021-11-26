<div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Detail Siswa <?php echo $data['nama']?></h3>
            </div><!-- /.box-header -->
            <div class="box-body">          
              <div class="row">
                <div class="col-md-12">

					<table class="table table-striped">
						<tbody>
							<tr>
								<th>Nama</th>
								<th> <?php echo $data['nama']?> </th>
							</tr>
							<tr>
								<th>Jabatan</th>
								<th> <?php echo $data['jabatan']?> </th>
							</tr>
							<tr>
								<th>Tanggal Lahir</th>
								<td> <?php
												$phpdate = strtotime( $data['tanggal_lahir'] );
												echo date( 'd-M-Y', $phpdate ) 
												 ?> </td>
							</tr>
							<tr>
								<th>NIP</th>
								<th> <?php echo $data['nip']?> </th>
							</tr>
							<tr>
								<th>NIK</th>
								<th> <?php echo $data['nik']?> </th>
							</tr>							
							<tr>
								<th>Download KTP</th>
								<td> <a href="<?php echo base_url().'Siswa/Download/'.$data['id'].'/'.$data['file_ktp']?>"> <?php echo $data['file_ktp']?>(Download)  </td>
							</tr>
							<tr>
								<th>Download KK</th>
								<td> <a href="<?php echo base_url().'Siswa/Download/'.$data['id'].'/'.$data['file_kk']?>"> <?php echo $data['file_kk']?>(Download)  </td>
							</tr>
						</tbody>
					</table>

				</div>
				
			  </div>
			</div>
		  </div>
		  <a href="<?php echo base_url().'Siswa'?> "><button class="btn btn-primary"> Kembali </button></a>
		  
		</section>
</div>
