<?php
$url = 'Karyawan/create';
$state = 'Tambah';
if(isset($isEdit)){
  $url ='Karyawan/update/'.$id;
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
        <h4 class="modal-title">Form <?$state?> Karyawan</h4>
        <div class="row">
          <div class="col-md-12">
          <div class="box-body">
            <div class="row">
              <div class="col-md-12">
			  <div class="form-group">
                  <label >Nama</label>
                  <input type="text" required class="form-control" name="nama" placeholder="Nama" value="<?php if($isEdit) echo $data['nama']?>" >
                </div>
                <div class="form-group">
                  <label >Jabatan</label>
                  <input type="text" required class="form-control" name="jabatan" placeholder="Jabatan" value="<?php if($isEdit) echo $data['jabatan']?>" >
                </div>  
								<div class="form-group">
                  <label >Tanggal Lahir</label>
                  <input type="date" required class="form-control" name="tanggal_lahir" placeholder="Tanggal Lahir" value="<?php if($isEdit) echo $data['tanggal_lahir']?>" >
                </div>   
								<div class="form-group">
                  <label >NIP/NRPTK</label>
                  <input type="text" required class="form-control" name="nip" placeholder="NIP/NRPTK" value="<?php if($isEdit) echo $data['nip']?>" >
                </div>
								<div class="form-group">
                  <label >NIK</label>
                  <input type="text" required class="form-control" name="nik" placeholder="NIK" value="<?php if($isEdit) echo $data['nik']?>" >
                </div>			
								<div class="form-group">
										<label> File SK PERTAMA</label>
										<input type ="file" class="form-control" name="file_sk_pertama" placeholder="SK PERTAMA">
								</div>				
								<div class="form-group">
										<label> File SK SEKARANG</label>
										<input type ="file" class="form-control" name="file_sk_sekarang" placeholder="SK SEKARANG">
								</div>
								<div class="form-group">    
										<label> File SPMT</label>
										<input type ="file" class="form-control" name="file_spmt" placeholder="SPMT">
								</div>
								<div class="form-group">    
										<label> File KK</label>
										<input type ="file" class="form-control" name="file_kk" placeholder="KK">
								</div>
								<div class="form-group">    
										<label> File KTP</label>
										<input type ="file" class="form-control" name="file_ktp" placeholder="KTP">
								</div>
								<div class="form-group">    
										<label> File AKTE</label>
										<input type ="file" class="form-control" name="file_akte" placeholder="AKTE">
								</div>
								<div class="form-group">    
										<label> File KIS</label>
										<input type ="file" class="form-control" name="file_kis" placeholder="KIS">
								</div>
								<div class="form-group">    
										<label> File NPWP</label>
										<input type ="file" class="form-control" name="file_npwp" placeholder="NPWP">
								</div>
								<div class="form-group">    
										<label> File PASPOR</label>
										<input type ="file" class="form-control" name="file_paspor" placeholder="PASPOR">
								</div>
								<div class="form-group">    
										<label> File BUKU NIKAH</label>
										<input type ="file" class="form-control" name="file_buku_nikah" placeholder="BUKU NIKAH">
								</div>
								<div class="form-group">    
										<label> File IJAZAH SD - S2</label>
										<input type ="file" class="form-control" name="file_ijazah_sd_s_2" placeholder="IJAZAH SD - S2">
								</div>
								<div class="form-group">    
										<label> File TRANKIP NILAI</label>
										<input type ="file" class="form-control" name="file_trankip_nilai" placeholder="TRANKIP NILAI">
								</div>
								<div class="form-group">    
										<label> File KTP SUAMI/ ISTRI</label>
										<input type ="file" class="form-control" name="file_ktp_suami_istri" placeholder="KTP SUAMI/ ISTRI">
								</div>
								<div class="form-group">    
										<label> File AKTE ANAK  1 SAMPAI 5 ANAK</label>
										<input type ="file" class="form-control" name="file_akte_anak_1_sampai_5_anak" placeholder="AKTE ANAK  1 SAMPAI 5 ANAK">
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
      <a href="<?=site_url('Karyawan');?>"><button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button></a>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </div>
    </form>
    <!-- /.modal-content -->
