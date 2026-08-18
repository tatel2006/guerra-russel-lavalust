<?php defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>My Student Portal | Profile</title>
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
		padding: 24px 0;
	}
	.card {
		background: rgba(255, 255, 255, 0.06);
		border: 1px solid rgba(255, 255, 255, 0.15);
		backdrop-filter: blur(6px);
		border-radius: 16px;
		padding: 36px 40px;
		max-width: 520px;
		width: 90%;
		box-shadow: 0 10px 30px rgba(0, 0, 0, 0.35);
	}
	nav {
		margin-bottom: 20px;
		font-size: 0.95rem;
		text-align: center;
	}
	nav a {
		color: #7fdbda;
		text-decoration: none;
		font-weight: 600;
		margin: 0 6px;
	}
	nav a:hover { text-decoration: underline; }
	.badge {
		display: inline-block;
		background: #7fdbda;
		color: #0f2027;
		font-size: 0.75rem;
		font-weight: 700;
		padding: 3px 10px;
		border-radius: 999px;
		margin-bottom: 10px;
	}
	h1 {
		font-size: 1.5rem;
		margin: 0 0 4px 0;
		color: #ffffff;
	}
	.role {
		color: #b9d4d3;
		margin-bottom: 20px;
	}
	table {
		width: 100%;
		border-collapse: collapse;
	}
	table td {
		padding: 8px 4px;
		border-bottom: 1px solid rgba(255, 255, 255, 0.1);
		vertical-align: top;
	}
	table td.label {
		width: 40%;
		color: #7fdbda;
		font-weight: 600;
	}
	.desc {
		margin-top: 18px;
		font-style: italic;
		color: #d7ecec;
		line-height: 1.5;
	}
</style>
</head>
<body>
	<div class="card">
		<nav>
			<a href="<?= site_url('student') ?>">Home</a> |
			<a href="<?= site_url('student/profile') ?>">Student Profile</a>
		</nav>

		<span class="badge">🔒 Middleware-Protected Page</span>
		<h1><?= htmlspecialchars($student['name']) ?></h1>
		<p class="role"><?= htmlspecialchars($student['course']) ?> — <?= htmlspecialchars($student['year']) ?>, Section <?= htmlspecialchars($student['section']) ?></p>

		<table>
			<tr><td class="label">Student ID</td><td><?= htmlspecialchars($student['student_id']) ?></td></tr>
			<tr><td class="label">Name</td><td><?= htmlspecialchars($student['name']) ?></td></tr>
			<tr><td class="label">Course</td><td><?= htmlspecialchars($student['course']) ?></td></tr>
			<tr><td class="label">Year Level</td><td><?= htmlspecialchars($student['year']) ?></td></tr>
			<tr><td class="label">Section</td><td><?= htmlspecialchars($student['section']) ?></td></tr>
			<tr><td class="label">Email</td><td><?= htmlspecialchars($student['email']) ?></td></tr>
			<tr><td class="label">Address</td><td><?= htmlspecialchars($student['address']) ?></td></tr>
			<tr><td class="label">Contact No.</td><td><?= htmlspecialchars($student['contact_no']) ?></td></tr>
			<tr><td class="label">Skills</td><td><?= htmlspecialchars($student['skills']) ?></td></tr>
			<tr><td class="label">Hobbies</td><td><?= htmlspecialchars($student['hobbies']) ?></td></tr>
		</table>

		<p class="desc">"<?= htmlspecialchars($student['description']) ?>"</p>
	</div>
</body>
</html>
