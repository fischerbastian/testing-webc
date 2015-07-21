<?php
require_once 'data.php';

?>

<html lang="en">
<head>
<meta charset="utf-8" />
<title>Use cases Emarking Activity</title>
<style>
</style>
</head>
<body>
	<div>
		<h1>Use cases Emarking Activity</h1>
	</div>
	<div>
			<?php
			$id = 1;
			foreach ( $new_combos as $combo ) {
				echo $id . ";Activity #" . $id;
				foreach ( $combo as $data ) {
					echo ";" . $data;
				}
				$id ++;
				echo "<br>";
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
		<div>
			<p></p>
		</div>
	</footer>
</body>
</html>