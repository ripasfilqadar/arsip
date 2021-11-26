<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class SuratKeluar extends MY_Controller{
  public $table_name = 'M_surat_keluar';
  public $controller = 'SuratKeluar';
	public $upload_folder = 'surat_keluar';
  public function __construct()
  {
    parent::__construct();
    if($this->IsVendor()){
      redirect('Welcome');
    }
  }

	function Download($id = "", $file = "")
	{
		$this->load->helper('url');
		$path = FCPATH.'/uploads/surat_keluar/'.$id.'/'.$file;
		$data = file_get_contents($path); // Read the file's contents
		var_dump($this->uri->rsegment_array());
		$this->load->helper('download');
		echo($path);
		var_dump($data);
		force_download($file, $data);
	}
}
?>
