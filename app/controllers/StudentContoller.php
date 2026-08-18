<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * StudentController
 *
 * Handles the Student Home page and the (middleware-protected) Student
 * Profile page for the Web Systems and Technologies laboratory activity.
 */
class StudentController extends Controller
{
	/**
	 * Student information.
	 *
	 * ⚠️ EDIT-ME: Replace every value below with YOUR OWN information
	 * before you take your screenshots / submit this activity. This is
	 * what makes the "Individualization Requirement" (Section VIII of
	 * the activity sheet) satisfied.
	 *
	 * @return array
	 */
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
			'hobbies'     => ' Badminton, Playing online games especially ml',
			'description' => 'A motivated IT student who enjoys building small web applications.',
		];
	}

	/**
	 * GET /student
	 * Student Home page (public).
	 *
	 * @return void
	 */
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

	/**
	 * GET /student/profile
	 * Student Profile page (protected by StudentMiddleware).
	 *
	 * @return void
	 */
	public function profile()
	{
		$data['student'] = $this->get_student_data();

		$this->call->view('student/student_profile', $data);
	}
}
?>