<?php
require_once 'data.php';

?>

<html lang="en">
<head>
<meta charset="utf-8" />
<title>Use cases Emarking Activity</title>
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<style>
</style>
</head>
<body>
	<div class="container-fluid">
		<h1>Use cases Emarking Activity</h1>
		<br>
	</div>
	<div class="container">
		<table class="table table-bordered table-condensed">
			<tr class="info">
			<?php
			foreach ( $header as $headers ) {
				echo '<th class="text-center">' . $headers . '</th>';
			}
			echo '</tr>';
			
			$id = 1;
			foreach ( $new_combos as $combo ) {
				echo '<tr>';
				echo '<td class="text-center">' . $id . '</td>';
				echo '<td class="text-center">Activity #' . $id . '</td>';
				foreach ( $combo as $data ) {
					echo '<td class="text-center">' . $data . '</td>';
				}
				echo '</tr>';
				$id ++;
			}
			
			/**
			 * echo '<pre>';
			 * echo var_dump($new_combos);
			 * echo '</pre>';
			 */
			
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