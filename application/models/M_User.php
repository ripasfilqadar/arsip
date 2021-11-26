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


}

?>
