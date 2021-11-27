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
								<th>NISN</th>
								<th> <?php echo $data['nisn']?> </th>
							</tr>
							<tr>
								<th>NIPD</th>
								<th> <?php echo $data['nipd']?> </th>
							</tr>
							<tr>
								<th>Nama Siswa</th>
								<th> <?php echo $data['nama']?> </th>
							</tr>							
							<tr>
								<th>Tempat Tanggal Lahir</th>
								<td> <?php
												$phpdate = strtotime( $data['tanggal_lahir'] );
												echo $data['tempat_lahir'].' '. date( 'd-M-Y', $phpdate ) 
												 ?> </td>
							</tr>
							<tr>
								<th>Kelas</th>
								<th> <?php echo $data['kelas']?> </th>
							</tr>
							<tr>
								<th>Wali Kelas</th>
								<th> <?php echo $data['wali_kelas']?> </th>
							</tr>
							<tr>
								<th>Keterangan</th>
								<th> <?php echo $data['keterangan']?> </th>
							</tr>							
							<tr>
								<th>BIODATA SISWA</th>
								<td>
									<?php if(!empty($data['file_biodata_siswa'])){?>
										<a href="<?php echo base_url().'Siswa/Download/'.$data['id'].'/'.$data['file_biodata_siswa']?>">
										<?php echo $data['file_biodata_siswa']?> (Download)
									</a>
									<?php }
									else{
										echo 'File Belum diupload';
									}?>
								</td>
							</tr>
								
							<tr>
								<th>    AKTE SISWA</th>
								<td>
									<?php if(!empty($data['file_akte_siswa'])){?>
										<a href="<?php echo base_url().'Siswa/Download/'.$data['id'].'/'.$data['file_akte_siswa']?>">
										<?php echo $data['file_akte_siswa']?> (Download)
									</a>
									<?php }
									else{
										echo 'File Belum diupload';
									}?>
								</td>
							</tr>
								
							<tr>
								<th>    KK </th>
								<td>
									<?php if(!empty($data['file_kk'])){?>
										<a href="<?php echo base_url().'Siswa/Download/'.$data['id'].'/'.$data['file_kk']?>">
										<?php echo $data['file_kk']?> (Download)
									</a>
									<?php }
									else{
										echo 'File Belum diupload';
									}?>
								</td>
							</tr>
								
							<tr>
								<th>    KTP ORANG TUA</th>
								<td>
									<?php if(!empty($data['file_ktp_orang_tua'])){?>
										<a href="<?php echo base_url().'Siswa/Download/'.$data['id'].'/'.$data['file_ktp_orang_tua']?>">
										<?php echo $data['file_ktp_orang_tua']?> (Download)
									</a>
									<?php }
									else{
										echo 'File Belum diupload';
									}?>
								</td>
							</tr>
								
							<tr>
								<th>    KIS / BPJS</th>
								<td>
									<?php if(!empty($data['file_kis_bpjs'])){?>
										<a href="<?php echo base_url().'Siswa/Download/'.$data['id'].'/'.$data['file_kis_bpjs']?>">
										<?php echo $data['file_kis_bpjs']?> (Download)
									</a>
									<?php }
									else{
										echo 'File Belum diupload';
									}?>
								</td>
							</tr>
								
							<tr>
								<th>    KIP</th>
								<td>
									<?php if(!empty($data['file_kip'])){?>
										<a href="<?php echo base_url().'Siswa/Download/'.$data['id'].'/'.$data['file_kip']?>">
										<?php echo $data['file_kip']?> (Download)
									</a>
									<?php }
									else{
										echo 'File Belum diupload';
									}?>
								</td>
							</tr>
								
							<tr>
								<th>    PKH</th>
								<td>
									<?php if(!empty($data['file_pkh'])){?>
										<a href="<?php echo base_url().'Siswa/Download/'.$data['id'].'/'.$data['file_pkh']?>">
										<?php echo $data['file_pkh']?> (Download)
									</a>
									<?php }
									else{
										echo 'File Belum diupload';
									}?>
								</td>
							</tr>
								
							<tr>
								<th>    BUKU TABUNGAN</th>
								<td>
									<?php if(!empty($data['file_buku_tabungan'])){?>
										<a href="<?php echo base_url().'Siswa/Download/'.$data['id'].'/'.$data['file_buku_tabungan']?>">
										<?php echo $data['file_buku_tabungan']?> (Download)
									</a>
									<?php }
									else{
										echo 'File Belum diupload';
									}?>
								</td>
							</tr>
								
							<tr>
								<th>    PAS FOTO SISWA</th>
								<td>
									<?php if(!empty($data['file_pas_foto_siswa'])){?>
										<a href="<?php echo base_url().'Siswa/Download/'.$data['id'].'/'.$data['file_pas_foto_siswa']?>">
										<?php echo $data['file_pas_foto_siswa']?> (Download)
									</a>
									<?php }
									else{
										echo 'File Belum diupload';
									}?>
								</td>
							</tr>
								
							<tr>
								<th>    KARTU GOLONGAN DARAH</th>
								<td>
									<?php if(!empty($data['file_kartu_golongan_darah'])){?>
										<a href="<?php echo base_url().'Siswa/Download/'.$data['id'].'/'.$data['file_kartu_golongan_darah']?>">
										<?php echo $data['file_kartu_golongan_darah']?> (Download)
									</a>
									<?php }
									else{
										echo 'File Belum diupload';
									}?>
								</td>
							</tr>
								
							<tr>
								<th>    RAPOT</th>
								<td>
									<?php if(!empty($data['file_rapot'])){?>
										<a href="<?php echo base_url().'Siswa/Download/'.$data['id'].'/'.$data['file_rapot']?>">
										<?php echo $data['file_rapot']?> (Download)
									</a>
									<?php }
									else{
										echo 'File Belum diupload';
									}?>
								</td>
							</tr>
								
							<tr>
								<th>    SURAT KET PINDAH</th>
								<td>
									<?php if(!empty($data['file_surat_ket_pindah'])){?>
										<a href="<?php echo base_url().'Siswa/Download/'.$data['id'].'/'.$data['file_surat_ket_pindah']?>">
										<?php echo $data['file_surat_ket_pindah']?> (Download)
									</a>
									<?php }
									else{
										echo 'File Belum diupload';
									}?>
								</td>
							</tr>
								
							<tr>
								<th>    SURAT KET LULUS</th>
								<td>
									<?php if(!empty($data['file_surat_ket_lulus'])){?>
										<a href="<?php echo base_url().'Siswa/Download/'.$data['id'].'/'.$data['file_surat_ket_lulus']?>">
										<?php echo $data['file_surat_ket_lulus']?> (Download)
									</a>
									<?php }
									else{
										echo 'File Belum diupload';
									}?>
								</td>
							</tr>
								
							<tr>
								<th>    SURAT KET KESEHATAN</th>
								<td>
									<?php if(!empty($data['file_surat_ket_kesehatan'])){?>
										<a href="<?php echo base_url().'Siswa/Download/'.$data['id'].'/'.$data['file_surat_ket_kesehatan']?>">
										<?php echo $data['file_surat_ket_kesehatan']?> (Download)
									</a>
									<?php }
									else{
										echo 'File Belum diupload';
									}?>
								</td>
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
