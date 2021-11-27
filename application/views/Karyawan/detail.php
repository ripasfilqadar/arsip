<div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Detail Karyawan <?php echo $data['nama']?></h3>
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
								<th>NIP/NRPTK</th>
								<th> <?php echo $data['nip']?> </th>
							</tr>
							<tr>
								<th>NIK</th>
								<th> <?php echo $data['nik']?> </th>
							</tr>	
							<tr>
								<th> Download SK SEKARANG</th>
								<td> <?php
								if(!empty($data['file_'])){
									?>
									<a href="<?php echo base_url().'Karyawan/Download/'.$data['id'].'/'.$data['file_sk_sekarang']?>">
								<?php echo $data['file_sk_sekarang']?> (Download)</td>
								<?php }
								else{
									echo 'File  Belum diupload';
								}
								 ?>
							</tr>

							<tr>
								<th> Download SK Pertama</th>
								<td> <?php
								if(!empty($data['file_sk_pertama'])){
									?>
									<a href="<?php echo base_url().'Karyawan/Download/'.$data['id'].'/'.$data['file_sk_pertama']?>">
								<?php echo $data['file_sk_pertama']?> (Download)</td>
								<?php }
								else{
									echo 'File  Belum diupload';
								}
								 ?>
							</tr>

								<tr>
								<th> Download SPMT</th>
								<td> <?php
								if(!empty($data['file_spmt'])){
									?>
									<a href="<?php echo base_url().'Karyawan/Download/'.$data['id'].'/'.$data['file_spmt']?>">
								<?php echo $data['file_spmt']?> (Download)</td>
								<?php }
								else{
									echo 'File  Belum diupload';
								}
								 ?>
							</tr>

								<tr>
								<th> Download KK</th>
								<td> <?php
								if(!empty($data['file_kk'])){
									?>
									<a href="<?php echo base_url().'Karyawan/Download/'.$data['id'].'/'.$data['file_kk']?>">
								<?php echo $data['file_kk']?> (Download)</td>
								<?php }
								else{
									echo 'File  Belum diupload';
								}
								 ?>
							</tr>

								<tr>
								<th> Download KTP</th>
								<td> <?php
								if(!empty($data['file_ktp'])){
									?>
									<a href="<?php echo base_url().'Karyawan/Download/'.$data['id'].'/'.$data['file_ktp']?>">
								<?php echo $data['file_ktp']?> (Download)</td>
								<?php }
								else{
									echo 'File  Belum diupload';
								}
								 ?>
							</tr>

								<tr>
								<th> Download AKTE</th>
								<td> <?php
								if(!empty($data['file_akte'])){
									?>
									<a href="<?php echo base_url().'Karyawan/Download/'.$data['id'].'/'.$data['file_akte']?>">
								<?php echo $data['file_akte']?> (Download)</td>
								<?php }
								else{
									echo 'File  Belum diupload';
								}
								 ?>
							</tr>

								<tr>
								<th> Download KIS</th>
								<td> <?php
								if(!empty($data['file_kis'])){
									?>
									<a href="<?php echo base_url().'Karyawan/Download/'.$data['id'].'/'.$data['file_kis']?>">
								<?php echo $data['file_kis']?> (Download)</td>
								<?php }
								else{
									echo 'File  Belum diupload';
								}
								 ?>
							</tr>						
							
						</tbody>
					</table>

				</div>
				
			  </div>
			</div>
		  </div>
		  <a href="<?php echo base_url().'Karyawan'?> "><button class="btn btn-primary"> Kembali </button></a>
		  
		</section>
</div>
