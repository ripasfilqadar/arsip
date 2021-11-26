<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Download extends MY_Controller{
  public function __construct()
  {
    parent::__construct();   
  }

	function download($path = "")
	{
		$this->load->helper('url');
		$array = $this->uri->rsegment_array();
		$url = "";
		$fileName = "";
		foreach ($array as $key => $value) {
			if($key == 3){
				$url = $array[$key];
			}
			if($key > 3 ){
				$url = $url.'/'.$array[$key];
			}			
			$fileName = $array[$key];
		}

		$data = file_get_contents(FCPATH.'/uploads/'.$url); // Read the file's contents
		var_dump($this->uri->rsegment_array());
		$this->load->helper('download');
		echo('./uploads/'.$url);
		// force_download($fileName, $data);
	}
}
?>
