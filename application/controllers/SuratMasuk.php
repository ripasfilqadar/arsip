<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class SuratMasuk extends MY_Controller{
  public $table_name = 'M_surat_masuk';
  public $controller = 'SuratMasuk';
	public $upload_folder = 'surat_masuk';
  public function __construct()
  {
    parent::__construct();
    if($this->IsVendor()){
      redirect('Welcome');
    }
  }
}
?>
