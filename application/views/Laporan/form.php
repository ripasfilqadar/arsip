<?php
$url = 'Laporan/create';
$state = 'Tambah';
if(isset($isEdit)){
  $url ='Laporan/update/'.$id;
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
        <h4 class="modal-title">Form <?$state?> Laporan</h4>
        <div class="row">
          <div class="col-md-12">
          <div class="box-body">
            <div class="row">
              <div class="col-md-12">			
                <div class="form-group">
                  <label >Perihal</label>
                  <input type="text" required class="form-control" name="perihal" placeholder="Perihal" value="<?php if($isEdit) echo $data['perihal']?>" >
                </div>  
								<div class="form-group">
                  <label >Tanggal</label>
                  <input type="date" required class="form-control" name="tanggal" placeholder="Perihal" value="<?php if($isEdit) echo $data['tanggal']?>" >
                </div>  								
								<div class="form-group">
                  <label >keterangan</label>
				  				<textarea name="description" required class="form-control"  ><?php if($isEdit) echo $data['description']?></textarea>                  
                </div>      								
								<div class="form-group">
                  <label >File Surat</label>
                  <input type="file" required class="form-control" name="file_surat" placeholder="File Surat" >
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
      <a href="<?=site_url('Laporan');?>"><button type="button" class="btn btn-default pull-left" data-dismiss="modal">Tutup</button></a>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </div>
    </form>
    <!-- /.modal-content -->
