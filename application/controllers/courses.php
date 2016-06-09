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
		// $show_columns = $this->Course->get_column_names();

		// var_dump($show_columns); die();
		
		$this->load->view('index', array('courses'=> $show_courses, 'column' => $show_columns));
	}

	public function add()
	{
		
		$this->load->model('Course');
		$course_info = $this->input->post();
		$this->Course->add_course($course_info);
		$course = $this->Course->add_course($course_info);
		var_dump($course_info);

		// $this->input->post('name');
		// $this->input->post('description');

		echo "add"; die();

		// $this->load->view('index');
	}

}