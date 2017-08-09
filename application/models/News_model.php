<?php 

class News_model extends CI_Model 
{

	public function __construct() 
	{
		$this->load->database();
	}

	public function index($slug = FALSE) 
	{
		if($slug == FALSE) {
			$query = $this->db->get('news');
			return $query->result_array();
		}

		$query = $this->db->get_where('news', array('slug' => $slug));
		return $query->row_array();
	}

	public function show($id = FALSE) 
	{
		$query = $this->db->get_where('news', array('id' => $id));
		return $query->row_array();
	}

	public function store() 
	{
		$this->load->helper('url');

		$slug = url_title($this->input->post('title'),'dash',TRUE);

		$data = array( 
			'title' => $this->input->post('title'),
			'slug' => $slug,
			'text' => $this->input->post('text')
		);

		return $this->db->insert('news', $data);
	}

	public function update($id) 
	{
		$this->load->helper('url');

		$slug = url_title($this->input->post('title'),'dash',TRUE);

		$data = array( 
			'title' => $this->input->post('title'),
			'slug' => $slug,
			'text' => $this->input->post('text')
		);

		$this->db->where('id', $id);
		return $this->db->update('news', $data);
	}


	public function destroy($id) 
	{
		return $this->db->delete('news',array('id' => $id));
	}

}