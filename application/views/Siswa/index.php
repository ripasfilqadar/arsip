<script src="<?= base_url('assets/'); ?>dist/js/handlebars-v4.0.11.js"></script>
<script type="text/javascript">
  <?php if($this->session->flashdata('success')){ ?>
        toastr.success("<?php echo $this->session->flashdata('success'); ?>");
  <?php }else if($this->session->flashdata('error')){  ?>
      toastr.error("<?php echo $this->session->flashdata('error'); ?>");
  <?php } ?>
</script>
<!-- Modal -->
<div class="modal fade" id="modal-st">
  <div class="modal-dialog modal-lg">
    <?php $this->view('Siswa/form');?>
  </div>
</div>
<?php $this->view('Siswa/delete');?>
<!-- /.modal -->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Daftar Siswa</h3>
            </div><!-- /.box-header -->
            <div class="box-body">          
              <div class="row">
                <div class="col-md-12">
                  <div style="float: right;margin-bottom: 10px">						
                    <a href="<?php echo site_url('Siswa/new');?>" class="btn btn-sm btn-info btn-flat pull-right open-modal-st"><i class="fa fa-plus"></i></a>
                  </div>
                  <table id="siswaTable" class="table table-bordered table-hover jambo_table" cellspacing="0" width="100%">
                    <thead>
                      <tr>                          
													<th>NISN</th>
													<th>NIPD</th>
													<th>Nama Siswa</th>
													<th>Tempat Tanggal Lahir</th>						  
													<th>Kelas</th>
													<th>Wali Kelas</th>
													<th>Keterangan</th>
                          <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                      foreach ($data as $siswa){
                        ?>
                      <tr data-siswa='<?php echo json_encode($siswa)?>'>
												<td> <?php echo $siswa['nisn'];?>  
												<td> <?php echo $siswa['nipd'];?>
												<td> <?php echo $siswa['nama'];?>
                        <td> <?php
													$phpdate = strtotime( $siswa['tanggal_lahir'] );
													echo $siswa['tempat_lahir'].' '.date( 'd-M-Y', $phpdate ) 
													?> 
												</td>		
												<td> <?php echo $siswa['kelas'];?>																												
												<td> <?php echo $siswa['wali_kelas'];?>
												<td> <?php echo $siswa['keterangan'];?>
                        <td>
                        <a href="<?php echo site_url('Siswa/edit/'.$siswa['id']);?>">
                          <button type="button" class="btn btn-info " aria-label="Left Align">
                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                          </button>
                        </a>
												<a href="<?php echo site_url('Siswa/detail/'.$siswa['id']);?>">
                          <button type="button" class="btn btn-info " aria-label="Left Align">
                            <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
                          </button>
                        </a>
												<button type="button" class="btn btn-danger js-btn-delete" aria-label="Left Align">
                          <span class="glyphicon  glyphicon-trash" aria-hidden="true"></span>
                        </button>
                      </tr>
                      <?php }?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div><!-- /.box-body -->
          </div><!-- /.box -->
          <div class="box box-primary" style="display: none" id="st-detail">
            <div class="box-header with-border">
              <h3 class="box-title">Detail</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
              </div>
            </div><!-- /.box-header -->
            <div class="box-body" id="body-detail">

            </div><!-- /.box-body -->


          </div><!-- /.box -->

          <div class="row">
            <div class="col-md-6">

            </div><!-- /.col (left) -->
            <div class="col-md-6">

              <!-- iCheck -->

            </div><!-- /.col (right) -->
          </div><!-- /.row -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
<script>
$(document).ready(function() {
  var data = <?php echo json_encode($data); ?>;
  var table = $('#siswaTable').DataTable();

  $('.js-datatable-search').on( 'keyup', function () {
    table.search( this.value ).draw();
  } );
} );


</script>
