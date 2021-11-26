<div class="modal fade" id="deleteKaryawan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Warning</h4>
      </div>
      <div class="modal-body">
        <h3 class="modalbody js-modal-delete-body" style="text-aligment:center"></h3>
      </div>
      <div class="modal-footer">
        <form id="myform" method="POST" role="form" action=<?= site_url('Karyawan/delete');?> enctype="multipart/form-data" autocomplete="off">
          <input type="hidden"  name="id" class="js-input-id" >
          <button type="submit" class="btn btn-danger">Hapus</button>
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
$(document).ready(() => {
  $("#karyawanTable").on("click",".js-btn-delete",function(){
    var button=this;
    var tr=$(button.closest("tr")).get();
    let data = $(tr[0]).data('karyawan');

    $('.js-modal-delete-body').html(`Apakah anda yakin menghapus Karyawan dengan Nama <b>${data.nama}</b>?`);
    $("#deleteKaryawan form input[name='id'").val(data.id);
    $("#deleteKaryawan").modal("show");
  });
})

</script>
