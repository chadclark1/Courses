<?php echo "hi courses2"; ?>

<!DOCTYPE html>
<html>
	<head>
		<title>Courses</title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<link rel="stylesheet" type="text/css" href="assets/style.css">

	</head>
	<body>
		<header>
			<nav class="navbar navbar-light bg-faded">
				<h1 class="navbar-brand">Courses</h1>
			</nav>
		</header>
		<div class=".container">
			<div class="col-md-5 col-md-offset-1 add">
				<h4>Add a new course:</h4>
				<form action="courses/add" method="post">
					<fieldset class="form-group">
					    <label for="name">Name</label>
					    <input type="text" class="form-control" name="name" id="name" placeholder="Enter name">
					</fieldset>
					<fieldset class="form-group">
					    <label for="description">Description:</label>
					    <textarea class="form-control" name="description" id="description" rows="4"></textarea>
					</fieldset>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
			<div class="col-md-10 col-md-offset-1 courses text-center">
				<table class="table">
				<thead class="">

				<th>ID</th>
				<th>Course</th>
				<th>Description</th>
				<th>Actions</th>
<!-- <?php 

	// echo $column;
	// foreach ($courses as $key => $value) {
	// 	foreach ($value as $data => $info) {
	// 		// echo $key['courses'] . " " . $key['description'] . "<br>";
	// 		// echo  $key . " " . $info . "<br>";
	// 		// echo $info['courses'] . " " . $info['description'] . "<br>";
	// 		echo $data;
	// 	}
	// }
?> -->
				</thead>
<?php 
	foreach ($courses as $key => $value) {
?>
				<tr>
<?php
		foreach ($value as $data => $info) {
			// echo $key['courses'] . " " . $key['description'] . "<br>";
			// echo  $key . " " . $info . "<br>";
			// echo $info['courses'] . " " . $info['description'] . "<br>";
			// var_dump($data);
?>
			
			<td class="col-md-3 data"><?php echo $info ?></td>

			

<?php 
		}

?>
				<td class="col-md-3 data">remove</td>
				</tr>
<?php


		// var_dump($value) . "<br>";
		// echo $value . "<br>";
	}

// var_dump($courses); ?>
				</table>
			</div>
		</div>

	</body>
</html>