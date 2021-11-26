<?php
class MY_Controller extends CI_Controller {
  public $current_user;
  public $controller;
  public $table_name, $data;
	public $upload_folder;
	function __construct()
	{
      parent::__construct();
      $this->load->model('M_User');
      if(is_null($this->session->userdata('user'))) {
        redirect('Login');
      }else{
        $this->current_user = new M_User($this->session->userdata('user'));
        $this->data['current_user'] = $this->current_user;
      }
      $this->load->database();
      $this->load->model($this->table_name);
  }

  function index(){
    $this->data['data'] = $this->{$this->table_name}->Get();
    $this->data['form'] = $this->load->view($this->controller.'/form', NULL, TRUE);
    $this->data['delete'] = $this->load->view($this->controller.'/delete', NULL, TRUE);
    $this->load->view('header', $this->data);
		$this->load->view($this->controller.'/index', $this->data);
		$this->load->view('footer');
  }

  function create(){
    $this->data = $this->input->post();
		$files = $_FILES;
		foreach ($files as $key => $value) {
			$this->data[$key] = str_replace(' ', '_', $files[$key]['name']) ;
		}
    $id = $this->{$this->table_name}->Create($this->data);
		$path = './uploads/'.$this->upload_folder.'/'.$id;
		
		$config['upload_path']          = $path;
		$config['max_size']             = 10000;
		$config['allowed_types'] = '*';
		$this->load->library('upload', $config);
	
		if(!is_dir($path)){
			mkdir($path, 0777, true);
		}
		foreach ($files as $key => $value) {
			$config['file_name'] = str_replace(' ', '_', $files[$key]['name']) ;;
			$this->upload->initialize($config);
			$this->upload->do_upload($key);
		}
    redirect($this->controller,'refresh');
  }

  function edit($id){
    $this->data['data'] = $this->{$this->table_name}->GetById($id);
    $this->data['isEdit'] = true;
    $this->data['id'] = $id;
    $this->data['form'] = $this->load->view($this->controller.'/form', $this->data, TRUE);
    $this->load->view('header', $this->data);
		$this->load->view($this->controller.'/edit', $this->data);
		$this->load->view('footer');
  }

	function detail($id){
    $this->data['data'] = $this->{$this->table_name}->GetById($id);
    $this->data['false'] = true;
    $this->data['id'] = $id;
    $this->load->view('header', $this->data);
		$this->load->view($this->controller.'/detail', $this->data);
		$this->load->view('footer');
  }


  function update($id){
    $this->data = $this->input->post();
    $this->{$this->table_name}->Update($id, $this->data);
    redirect($this->controller.'/index');
  }

  function delete(){
    $id = $this->input->post('Id');
    
    $this->{$this->table_name}->Delete($id);
    redirect($this->controller,'refresh');

  }

  function IsVendor(){
    return $this->current_user->VendorId != null;
  }
}
?>
