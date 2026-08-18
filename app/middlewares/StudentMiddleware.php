<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * StudentMiddleware
 *
 * Protects the /student/profile route. Access is only granted if the
 * visitor has first landed on the /student home page in this session
 * (the 'student_access' session flag is set inside
 * StudentController::index()).
 *
 * ⚠️ EDIT-ME: This is the "unique middleware access condition or
 * message" required by the activity sheet — feel free to change the
 * condition/message below to make it your own (e.g. a different
 * session key, a simple time check, a query-string "pass", etc.).
 */
class StudentMiddleware
{
	/**
	 * Handle the incoming request.
	 *
	 * @param Closure $next
	 * @return mixed
	 */
	public function handle(Closure $next)
	{
		$LAVA = lava_instance();
		$LAVA->call->library('session');

		if ($LAVA->session->userdata('student_access') === true) {
			return $next();
		}

		// Not allowed yet -> send them to the home page first.
		$LAVA->session->set_flashdata(
			'access_message',
			'Please visit the Home page first before viewing the Student Profile.'
		);

		redirect(site_url('student'));
	}
}
?>
