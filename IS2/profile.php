<?php





// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: registration.html');
	exit();
}


?>

<!DOCTYPE html>
<html>
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

		<style>
			.form-control{min-width: 300px;}
			.btn{min-width: 300px;}
			.row{max-height: 60px;}
		</style>

		<title>StrathCafe | My profile</title>

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
			<a class="navbar-brand" href="#">
				<img src="logo.png" class="img-fluid" width="30px"><strong>StrathCafe</strong>
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse justify-content-between" id="navbarNavDropdown">
				<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="#">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Contacts</a>
				</li>
				</ul>
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="logout.php">Logout</a>
					</li>
				</ul>
			</div>
		</nav>

		<div class="container">
			<div class="container rounded border border-dark" style="margin-top:50px; margin-bottom:50px;">

			<div class="table-responsive-md">
				<h2>Account Details:</h2>
				<div>
					<table class="table container">
						<tr class="row">
							<td class="col-md-2">First Name:</td>
							<td class="col-md-10"><?=$_SESSION['FirstName']?></td>
						</tr>
						<tr class="row">
							<td class="col-md-2">Last Name:</td>
							<td class="col-md-10"><?=$_SESSION['LastName']?></td>
						</tr>
						<tr class="row">
							<td class="col-md-2">Admission Number:</td>
							<td class="col-md-10"><?=$_SESSION['AdmissionNumber']?></td>
						</tr>
						<tr class="row">
							<td class="col-md-2">Gender:</td>
							<td class="col-md-10"><?=$_SESSION['Gender']?></td>
						</tr>
						<tr class="row">
							<td class="col-md-2">Email:</td>
							<td class="col-md-10"><?=$_SESSION['Email']?></td>
						</tr>
						<tr class="row">
							<td class="col-md-2">Password:</td>
							<td class="col-md-10"><?=$_SESSION['Password']?></td>
						</tr>
						<tr class="row">
							<td class="col-md-12 text-center"><a href="home.php"><div class="btn btn-primary">OK</div></a></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
</html>
