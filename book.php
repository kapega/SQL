<?php
$login=mysqli_connect("localhost", "eborodina", "neto1541", "global");
$login->set_charset("utf8");
$sql="select * from books";
$result=mysqli_query($login, $sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Библиотека успешного человека<</title>
	<style type="text/css">
		table {
    		border-collapse: collapse;
    		border: 1px solid #ccc;
   		}
   		tr, td, th {
    		padding: 5px;
   			border: 1px solid #ccc;
   		}
   		th {
    		background-color: #EFEEEC; 
    		font-weight: bold; 
    		text-align: center;
   		}
	</style>
</head>
<body>
	<h1>Библиотека успешного человека</h1>
	<table>
		<thead>
			<th>Название</th>
			<th>Автор</th>
			<th>Год выпуска</th>
			<th>Жанр</th>
			<th>ISBN</th>
		</thead>
	    <?php
		while ($data=mysqli_fetch_array($result))
		{?>
		<tbody>
			<tr>
				<td><?php echo $data["name"] ?></td>
				<td><?php echo $data["author"] ?></td>
				<td><?php echo $data["year"] ?></td>
				<td><?php echo $data["genre"] ?></td>
				<td><?php echo $data["isbn"] ?></td>
			</tr>
		</tbody>
		<?php
		}
		?>
	</table>
</body>
</html>