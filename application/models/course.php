<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Course extends CI_Model {

	function add_course($course_info){

			$query = "INSERT INTO courses (courses, description) VALUES (?,?)";
			$values = array($course_info['name'], $course_info['description']);
			return $this->db->query($query, $values);
		}

	function delete_course($course_info){

		$query = "DELETE FROM courses WHERE id = $course_info";
		return $this->db->query($query);
	}

	function get_all_courses(){
		return $this->db->query("SELECT * FROM courses")->result_array();
		
	}

	function get_course_by_id($course_id){

		return $this->db->query("SELECT * FROM courses WHERE id = ?", array($course_id))->row_array();
	}

	

}

?>