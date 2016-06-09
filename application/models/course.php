<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Course extends CI_Model {

	function add_course($course_info){

			$query = "INSERT INTO courses (courses, description) VALUES (?,?)";
			$values = array($course_info['name'], $course_info['description']);
			return $this->db->query($query, $values);
		}

	function get_all_courses(){
		return $this->db->query("SELECT * FROM courses")->result_array();
		
	}

	function get_course_by_id($course_id){

		return $this->db->query("SELECT * FROM courses WHERE id = ?", array($course_id))->row_array();
	}

	// function get_column_names(){
	// 	return $this->db->query("SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS 
	// 		WHERE TABLE_SCHEMA = 'courses' AND TABLE_NAME = 'courses'");
	// }

}

?>