<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class SuratKeluar extends MY_Controller{
  public $table_name = 'M_surat_keluar';
  public $controller = 'SuratKeluar';
	public $upload_folder = 'surat_keluar';
  public function __construct()
  {
    parent::__construct();
  }
}
?>
