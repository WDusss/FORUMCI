<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->helper('tglindo_helper');
		$this->load->model('Post_model');	
	}
	
	
	public function index()
	{
		$this->load->library('pagination');

		$config['base_url'] = base_url('home/index/');
		$config['total_rows'] = $this->Post_model->total_rows('tbl_post');
		$config['per_page'] = 3;

		/* config 
		//$config['full_tag_open'] = '<ul class="pagination">';
		//$config['full_tag_close'] = '</ul>';
		$config['first_url'] = '';
		$config['cur_tag_open'] = '<li class="active"><a href="#">';
		$config['cur_tag_close'] = '</li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		*/
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close']= '</li>';
		$config['prev_link'] 	= '&lt;';
		$config['prev_tag_open']='<li>';
		$config['prev_tag_close']='</li>';
		$config['next_link'] 	= '&gt;';
		$config['next_tag_open']='<li>';
		$config['next_tag_close']='</li>';
		$config['cur_tag_open']='<li class="active disabled"><a href="#">';
		$config['cur_tag_close']='</a></li>';
		$config['first_tag_open']='<li>';
		$config['first_tag_close']='</li>';
		$config['last_tag_open']='<li>';
		$config['last_tag_close']='</li>';
		
		$this->pagination->initialize($config);		

		$limit = $config['per_page'];
		$offset = (int) $this->uri->segment(3);

		$data = array(
				'record' => $this->Post_model->read('tbl_post', $limit, $offset),
				'komentar' => $this->Post_model->read_komen('comment'),
				'pagination' => $this->pagination->create_links()
			);
		$this->load->view('home',$data);
	}

	public function read($id){
		$data['record']=$this->Post_model->baca_artikel($id);
		$data['komentar']=$this->Post_model->read_komen($id);
		$this->load->view('v_single',$data);
	}

	public function tambah_komentar($param=NULL){
		if($param=='kirim_komentar'){
			$post = $this->input->post();			
			$id_artikel = $this->input->post('ID');
			$data = array(
					'ID' => $id_artikel,
					'comment_name' => $post['comment_name'],
					'comment_email' => $post['comment_email'],
					'comment_body' => $post['comment_body'],
					'comment_date' => date('Y-m-d')
				);
				$this->Post_model->create('comment',$data);
				redirect(base_url('home/read/'.$id_artikel.'#komentar'));
		}
		else{
			
		}	
		
		
		
	} 
	
	

}