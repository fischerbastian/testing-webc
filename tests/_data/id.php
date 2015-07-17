<?php

require_once 'data.php';

?>

<html lang="en">
<head>
<meta charset="utf-8" />
<title>Use cases Emarking activity</title>
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
	<div class="container-fluid">
		<h1>Use cases Emarking activity</h1>
		<br>
	</div>

	<div class="container">
		<table class="table table-bordered">
			<tr class="info">
				<th>#</th>
				<th>Activity name</th>
				<th>Marking type</th>
				<th>Total Pages</th>
				<th>Marker type</th>
				<th>Custom marks</th>
				<th>Enable due date</th>
				<th>Restrict regrading date</th>
				<th>Students view peers' exams</th>
				<th>Grading method</th>
				<th>Grade category</th>
				<th>Minimum grade</th>
				<th>Maximum grae</th>
				<th>Adjust grade slope</th>
			</tr>
		<?php
		for($i = 0; $i < count ( $combos ); $i ++) {
			
			echo '<tr>';
			echo '<td>' . ($i + 1) . '</td>';
			echo '<td>Activity #' . ($i + 1) . '</td>';
			for($j = 0; $j < count ( $combos [$i] ); $j ++) {
				
				echo '<td>';
				echo $combos [$i] [$j];
				echo '</td>';
			}
			echo '</tr>';
		}
		
		?>
	</table>
	</div>

</body>
</html>