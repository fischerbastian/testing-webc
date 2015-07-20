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
			<?php
			foreach ( $header as $headers ) {
				echo '<th>' . $headers . '</th>';
			}
			echo '</tr>';
			
			$id = 1;
			foreach ( $combos as $combo ) {
				echo '<tr>';
				echo '<td>' . $id . '</td>';
				echo '<td>Activity #' . $id . '</td>';
				foreach ( $combo as $data ) {
					echo '<td>' . $data . '</td>';
				}
				echo '</tr>';
				$id ++;
			}
			?>
		
		
		</table>
	</div>
	<footer>
		<div class="container">
			<p class="text-muted">&copy<?=date('Y')?> Bastián Fischer G, All Right Reserved</p>
		</div>
	</footer>
</body>
</html>