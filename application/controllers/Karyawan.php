<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Karyawan extends MY_Controller{
  public $table_name = 'M_Karyawan';
  public $controller = 'Karyawan';
  public $upload_folder = 'karyawan';
  public function __construct()
  {
    parent::__construct();
  }
}
?>
