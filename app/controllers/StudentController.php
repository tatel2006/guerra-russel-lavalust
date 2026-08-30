<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');


class StudentController extends Controller
{
	
	private function get_student_data()
	{
		return [
			'student_id'  => 'MCC2024-00229',
			'name'        => 'Guerra, Russel N.',
			'course'      => 'BS Information Technology',
			'year'        => '3rd Year',
			'section'     => '3F5',
			'email'       => 'guerrarussel3@gmail.com',
			'address'     => 'Centro 2, Gulod, Calapan City, Oriental Mindoro',
			'contact_no'  => '09383549129',
			'skills'      => 'PHP, MySQL, UI/UX Design',
			'hobbies'     => '
			 Badminton, Playing online games especially ml',
			'description' => 'A motivated IT student who enjoys building small web applications.',
			
			'facebook'    => 'https://facebook.com/russel.guerra.790',
			'instagram'   => 'https://instagram.com/russelguerra.com.ph',
			'github'      => 'https://github.com/tatel2006',
		];
	}

	
	public function index()
	{
		// Load the session library and mark that the visitor has come
		// through the Home page. StudentMiddleware checks this flag
		// before allowing access to the profile page.
		$this->call->library('session');
		$this->session->set_userdata('student_access', true);

		$data['student'] = $this->get_student_data();

		$this->call->view('student/student_home', $data);
	}

	
	public function profile()
	{
		$data['student'] = $this->get_student_data();

		$this->call->view('student/student_profile', $data);
	}
}
?>