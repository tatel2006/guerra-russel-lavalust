<?php defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>My Student Portal | Home</title>
<style>
	* { box-sizing: border-box; }
	body {
		margin: 0;
		font-family: 'Segoe UI', Tahoma, sans-serif;
		background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
		min-height: 100vh;
		display: flex;
		align-items: center;
		justify-content: center;
		color: #eaf6f6;
	}
	.card {
		background: rgba(255, 255, 255, 0.06);
		border: 1px solid rgba(255, 255, 255, 0.15);
		backdrop-filter: blur(6px);
		border-radius: 16px;
		padding: 40px;
		max-width: 480px;
		width: 90%;
		text-align: center;
		box-shadow: 0 10px 30px rgba(0, 0, 0, 0.35);
	}
	nav {
		margin-bottom: 24px;
		font-size: 0.95rem;
	}
	nav a {
		color: #7fdbda;
		text-decoration: none;
		font-weight: 600;
		margin: 0 6px;
	}
	nav a:hover { text-decoration: underline; }
	h1 {
		font-size: 1.6rem;
		margin-bottom: 8px;
		color: #ffffff;
	}
	p.tagline {
		color: #b9d4d3;
		margin-bottom: 24px;
	}
	.flash {
		background: rgba(255, 193, 7, 0.15);
		border: 1px solid #ffc107;
		color: #ffe9a8;
		padding: 10px 14px;
		border-radius: 8px;
		margin-bottom: 20px;
		font-size: 0.9rem;
	}
	.btn {
		display: inline-block;
		margin-top: 8px;
		background: #7fdbda;
		color: #0f2027;
		padding: 10px 22px;
		border-radius: 999px;
		text-decoration: none;
		font-weight: 700;
		transition: transform 0.15s ease;
	}
	.btn:hover { transform: translateY(-2px); }
</style>
</head>
<body>
	<div class="card">
		<nav>
			<a href="<?= site_url('student') ?>">Home</a> |
			<a href="<?= site_url('student/profile') ?>">Student Profile</a>
		</nav>

		<?php
		// If StudentMiddleware bounced a visitor back here, show why.
		$session = $this->call->library('session');
		$flash = $session->flashdata('access_message');
		if (!empty($flash)):
		?>
			<div class="flash"><?= htmlspecialchars($flash) ?></div>
		<?php endif; ?>

		<h1>👋 Hi, I'm <?= htmlspecialchars($student['name']) ?></h1>
		<p class="tagline"><?= htmlspecialchars($student['year']) ?> — <?= htmlspecialchars($student['course']) ?>, Section <?= htmlspecialchars($student['section']) ?></p>
		<p>Welcome to my Student Portal for the Web Systems and Technologies laboratory activity. Head over to my profile to see my full student information.</p>
		<a class="btn" href="<?= site_url('student/profile') ?>">View My Profile →</a>
	</div>
</body>
</html>
