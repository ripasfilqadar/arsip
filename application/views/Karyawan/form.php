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
                  <label >NIP</label>
                  <input type="text" required class="form-control" name="nip" placeholder="NIP" value="<?php if($isEdit) echo $data['nip']?>" >
                </div>
								<div class="form-group">
                  <label >NIK</label>
                  <input type="text" required class="form-control" name="nik" placeholder="NIK" value="<?php if($isEdit) echo $data['nik']?>" >
                </div>							
								<div class="form-group">
                  <label >File KK</label>
                  <input type="file"  class="form-control" name="file_kk" placeholder="File KK" >
                </div>   
								<div class="form-group">
                  <label >File KTP</label>
                  <input type="file"  class="form-control" name="file_ktp" placeholder="File KTP" >
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
