<?php
$url = 'Siswa/create';
$state = 'Tambah';
if(isset($isEdit)){
  $url ='Siswa/update/'.$id;
  $state ='Edit';
}else{
  $isEdit = false;
}
?>
  <form id="myform" method="POST" role="form" action=<?= site_url($url);?> enctype="multipart/form-data" autocomplete="off">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Form <?$state?> Siswa</h4>
        <div class="row">
          <div class="col-md-12">
          <div class="box-body">
            <div class="row">
              <div class="col-md-12">
							<div class="form-group">
                  <label >NISN</label>
                  <input type="text" required class="form-control" name="nisn" placeholder="NISN" value="<?php if($isEdit) echo $data['nisn']?>" >
                </div>   
								<div class="form-group">
                  <label >NIPD</label>
                  <input type="text" required class="form-control" name="nipd" placeholder="NIPD" value="<?php if($isEdit) echo $data['nipd']?>" >
                </div>   
							<div class="form-group">
                  <label >Nama</label>
                  <input type="text" required class="form-control" name="nama" placeholder="Nama" value="<?php if($isEdit) echo $data['nama']?>" >
                </div>   
								<div class="form-group">
                  <label >Tempat Lahir</label>
                  <input type="text" required class="form-control" name="tempat_lahir" placeholder="Tempat Lahir" value="<?php if($isEdit) echo $data['tempat_lahir']?>" >
                </div>               
								<div class="form-group">
                  <label >Tanggal Lahir</label>
                  <input type="date" required class="form-control" name="tanggal_lahir" placeholder="Tanggal Lahir" value="<?php if($isEdit) echo $data['tanggal_lahir']?>" >
                </div>   
								<div class="form-group">
                  <label >Kelas</label>
                  <input type="text" required class="form-control" name="kelas" placeholder="Kelas" value="<?php if($isEdit) echo $data['kelas']?>" >
                </div>   
								<div class="form-group">
                  <label >Wali Kelas</label>
                  <input type="text" required class="form-control" name="wali_kelas" placeholder="Wali Kelas" value="<?php if($isEdit) echo $data['wali_kelas']?>" >
                </div>   
								<div class="form-group">
                  <label >Keterangan</label>
									<textarea   class="form-control" name="keterangan" id="" cols="30" rows="10"><?php if($isEdit) echo $data['keterangan']?></textarea>                  
                </div>		
								<div class="form-group">
										<label>BIODATA SISWA</label>
										<input type="file" class="form-control" name="file_biodata_siswa" placeholder="BIODATA SISWA">
								</div>    
								<div class="form-group">
										<label>AKTE SISWA</label>
										<input type="file" class="form-control" name="file_akte_siswa" placeholder="AKTE SISWA">
								</div>    
								<div class="form-group">
										<label>KK </label>
										<input type="file" class="form-control" name="file_kk" placeholder="KK ">
								</div>    
								<div class="form-group">
										<label>KTP ORANG TUA</label>
										<input type="file" class="form-control" name="file_ktp_orang_tua" placeholder="KTP ORANG TUA">
								</div>    
								<div class="form-group">
										<label>KIS / BPJS</label>
										<input type="file" class="form-control" name="file_kis_bpjs" placeholder="KIS / BPJS">
								</div>    
								<div class="form-group">
										<label>KIP</label>
										<input type="file" class="form-control" name="file_kip" placeholder="KIP">
								</div>    
								<div class="form-group">
										<label>PKH</label>
										<input type="file" class="form-control" name="file_pkh" placeholder="PKH">
								</div>    
								<div class="form-group">
										<label>BUKU TABUNGAN</label>
										<input type="file" class="form-control" name="file_buku_tabungan" placeholder="BUKU TABUNGAN">
								</div>    
								<div class="form-group">
										<label>PAS FOTO SISWA</label>
										<input type="file" class="form-control" name="file_pas_foto_siswa" placeholder="PAS FOTO SISWA">
								</div>    
								<div class="form-group">
										<label>KARTU GOLONGAN DARAH</label>
										<input type="file" class="form-control" name="file_kartu_golongan_darah" placeholder="KARTU GOLONGAN DARAH">
								</div>    
								<div class="form-group">
										<label>RAPOT</label>
										<input type="file" class="form-control" name="file_rapot" placeholder="RAPOT">
								</div>    
								<div class="form-group">
										<label>SURAT KET PINDAH</label>
										<input type="file" class="form-control" name="file_surat_ket_pindah" placeholder="SURAT KET PINDAH">
								</div>    
								<div class="form-group">
										<label>SURAT KET LULUS</label>
										<input type="file" class="form-control" name="file_surat_ket_lulus" placeholder="SURAT KET LULUS">
								</div>    
								<div class="form-group">
										<label>SURAT KET KESEHATAN</label>
										<input type="file" class="form-control" name="file_surat_ket_kesehatan" placeholder="SURAT KET KESEHATAN">
								</div>					
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          </div>
        </div>
      </div>
      <div class="modal-body" id="content-placeholder">

      </div>
      <div class="modal-footer">
      <a href="<?=site_url('Siswa');?>"><button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button></a>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </div>
    </form>
    <!-- /.modal-content -->
