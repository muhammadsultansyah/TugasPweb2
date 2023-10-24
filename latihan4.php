<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Modul 2 - Latihan 1</title>
</head>
<body>
	<table border="1" cellpadding="3" cellspacing="0">
		<tr>
			<th>kolom 1</th>
			<th>kolom 2</th>
			<th>kolom 3</th>
			<th>kolom 4</th>
			<th>kolom 5</th>
		</tr>
		<?php


		for ($row=1; $row <= 15; $row++) {
			echo "<tr>";
			for ($col=1; $col <=5; $col++) {

				echo "<td>baris $row kolom $col </td>";
					}
				echo "</tr>";
			}
		?>
	</table>

</body>
</html>