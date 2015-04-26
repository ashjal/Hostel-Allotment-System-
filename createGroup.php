<!DOCTYPE HTML>
<html lang='en' >
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="icon" href="favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" href="jquery-ui.min.css" />
	<link rel="stylesheet" type="text/css" href="group.css" >
	<title>Group | Hostel-G</title>
	<script type="text/javascript" src="jquery.min.js"></script>
	<script type="text/javascript" src="jquery-ui.min.js"></script>
	<script type="text/javascript" src="jquery-uniform.js"></script>
</head>

<body>
	<header class="green_grad">
		<table>
			<tr>
				<td class="td_small">
					<a href="index.php">
					<img height="80" width="100" src="img/jlogo.png" alt="Hostel-J Logo"/>
					</a>
				</td>
				<td class="td_big">
					<h1>Hostel-G, Thapar University</h1>
				</td>
				<td class="td_small">
					<a href="http://thapar.edu" target="_BLANK">
					<img height="100" width="160" src="img/tulogo.png" alt="Thapar Logo"/>
					</a>
				</td>
			</tr>
		</table>
	</header>
	<div class="body_area">
		<div class="body_content">
			<form method="POST" action="group.php" class="gray_grad box group_form">
				<input type="hidden" name="create_group" value="true">
				<input type="hidden" name="ajax_request" value="true">
				<table id="password_table">
					<caption>Create Group</caption>
					<tbody>
						<tr>
							<td colspan="2">
								<strong>NOTE : </strong>Once you create a group, you can&apos;t <strong>ADD/REMOVE </strong>a member.
							</td>
						</tr>
						<tr>
							<td>
								<label for="input_size">Number of members<sup class="req">*</sup> :</label>
							</td>
							<td>
								<select id="input_size" name="group_size" class="required" title="Please select the number of members in your Group">
									<option>...</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
								</select>
							</td>
						</tr>
						
					</tbody>
				</table>
			</form>
		</div>
	</div>

	<footer class="green_grad">
		<ul>
			<li>
				<a target="_blank" href="help.php">Instructions</a>
			</li>
			<li class="separator">|</li>
			<li>
				<a target="_blank" href="complaint.php">Support</a>
			</li>
			<li class="separator">|</li>
			<li>
				<a target="_blank" href="developers.php">Developers</a>
			</li>
		</ul>
	</footer>
</body>

</html>