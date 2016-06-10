<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Courses extends CI_Controller {

	public function construct__(){
		parent::__construct();
		$this->output->enable_profiler(TRUE);
	}

	public function index()
	{
		$this->load->model('Course');
		$show_courses = $this->Course->get_all_courses();
		

		$this->load->view('index', array('courses'=> $show_courses));
	}

	public function add()
	{
		
		$this->load->model('Course');
		$course_info = $this->input->post();
		$this->Course->add_course($course_info);
		$course = $this->Course->add_course($course_info);
	
		redirect('/');
	}

	public function delete($id)
	{
		
		$this->load->model('Course');
		$this->Course->delete_course($id);
		

		redirect('/');
	}

}