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
    <?php $this->view('Laporan/form');?>
  </div>
</div>
<?php $this->view('Laporan/delete');?>
<!-- /.modal -->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Daftar Laporan</h3>
            </div><!-- /.box-header -->
            <div class="box-body">          
              <div class="row">
                <div class="col-md-12">
                  <div style="float: right;margin-bottom: 10px">
                    <a class="btn btn-sm btn-info btn-flat pull-right open-modal-st" data-toggle="modal" data-target="#modal-st"><i class="fa fa-plus"></i></a>
                  </div>
                  <table id="tSordatatabletable" class="table table-bordered table-hover jambo_table" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                          <th width="25%">Perihal</th>
													<th>Tanggal</th>
                          <th width="25%">Deskripsi</th>
													<th>Tanggal Rekam</th>
													<th>Download File</th>
                          <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                      foreach ($data as $surat){
                        ?>
                      <tr data-vendor='<?php echo json_encode($surat)?>'>
                        <td> <?php echo $surat['perihal'];?></td>
												<td> <?php
													$phpdate = strtotime( $surat['tanggal'] );
													echo date( 'd-M-Y', $phpdate ) 
													?> 
												</td>	
												<td> <?php echo $surat['description'];?></td>
                        <td> <?php
													$phpdate = strtotime( $surat['created_date'] );
													echo date( 'd-M-Y', $phpdate ) 
													?> 
												</td>												
												<td> <a href="<?php echo base_url().'Laporan/Download/'.$surat['id'].'/'.$surat['file_surat']?>"> Download </td>
                        <td>
                        <a href="<?php echo site_url('Laporan/edit/'.$surat['id']);?>">
                          <button type="button" class="btn btn-info " aria-label="Left Align">
                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                          </button>
                        </a>											
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
  var table = $('#tSordatatabletable').DataTable();

  $('.js-datatable-search').on( 'keyup', function () {
    table.search( this.value ).draw();
  } );
} );


</script>
