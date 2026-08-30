<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');


class StudentMiddleware
{
	
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
