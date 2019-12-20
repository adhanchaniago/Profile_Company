<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class Web extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function index() 
	{
		$data['company'] = $this->m_main->get_where('tbl_company','row','id = 1');
		$data['title'] 	 = "Home | ";
		$data['project'] = $this->m_main->select_all('tbl_project','result');
		$data['slider']  = $this->m_main->select_all('tbl_slider','result');
		$this->template->load('front-end/template','front-end/v_home',$data);
	}

	public function about()
	{
		$data['team'] 		= $this->m_main->select_limit('tbl_team','row', '1');
		$data['list_team'] 	= $this->m_main->select_all('tbl_team','result');
		$data['company'] 	= $this->m_main->get_where('tbl_company','row','id = 1');
		$data['title'] 	 	= "About | ";
		$this->template->load('front-end/template','front-end/v_about',$data);
	}

	public function service()
	{
		$data['project']	= $this->m_main->select_all('tbl_project','result');
		$data['company'] 	= $this->m_main->get_where('tbl_company','row','id = 1');
		$data['title'] 	 	= "Services | ";
		$this->template->load('front-end/template','front-end/v_service',$data);
	}

	public function contact()
	{
		$data['company'] 	= $this->m_main->get_where('tbl_company','row','id = 1');
		$data['title'] 	 	= "Contact | ";
		$this->template->load('front-end/template','front-end/v_contact',$data);
	}

	public function career()
	{
		$data['career'] 	= $this->m_main->select_all('tbl_career', 'result');
		$data['company'] 	= $this->m_main->get_where('tbl_company','row','id = 1');
		$data['title'] 	 	= "Career | ";
		$this->template->load('front-end/template','front-end/v_career',$data);
	}
}