<?php

class M_User extends MY_Model
{
  public $table = 'user';
  public $idName = 'UserId';
  public $NIP, $VendorId, $Id, $Nama, $Email, $IsVendor, $Role;
  function __construct($argument = []) {
		parent::__construct();
	}

  public function check_db(){
		$email=$this->input->post('username');
    $password=md5($this->input->post('password'));
    $user = $this->GetBy(array('username' => $email, 'password' => $password));
		return $user;
	}

	public function init(){
    $query = $this->db->query("INSERT INTO `slbkundu_waris3`.`user` (`username`, `password`, `name`) VALUES ('admin', '21232f297a57a5a743894a0e4a801fc3', 'administrator')");
    return $query->result_array();
	}


}

?>
