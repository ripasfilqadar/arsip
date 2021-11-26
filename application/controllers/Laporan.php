<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Laporan extends MY_Controller{
  public $table_name = 'M_Laporan';
  public $controller = 'Laporan';
	public $upload_folder = 'laporan';
  public function __construct()
  {
    parent::__construct();
  }
}
?>
