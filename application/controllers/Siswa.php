<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Siswa extends MY_Controller{
  public $table_name = 'M_Siswa';
  public $controller = 'Siswa';
  public $upload_folder = 'siswa';
  public function __construct()
  {
    parent::__construct();
  }
}
?>
