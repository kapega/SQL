<?php
define("DB_SERVER", "localhost");
define("DB_USER", "eborodina");
define("DB_PASSWORD", "neto1541");
define("DB_DATABASE", "global");

$login = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);

if (mysqli_connect_errno()) {
    echo 'Ошибка в подключении к базе данных (' . mysqli_connect_errno() . '): '
    . '' . mysqli_connect_error();
    exit();
}
$login->set_charset("utf8");
$sql = "SELECT * FROM `books`";
$result = mysqli_query($login, $sql);
$books = mysqli_fetch_all($result, MYSQLI_ASSOC);

echo '<pre>';
print_r($sql);
echo '<pre>';

echo '<pre>';
print_r($result);
echo '<pre>';

?>

<style>
    table { 
        border-spacing: 0;
        border-collapse: collapse;
    }

    table td, table th {
        border: 1px solid #ccc;
        padding: 5px;
    }
    
    table th {
        background: #eee;
    }
</style>
<h1>Библиотека успешного человека</h1>

<form method="GET">
    <input type="text" name="isbn" placeholder="ISBN" value="" />
    <input type="text" name="name" placeholder="Название книги" value="" />
    <input type="text" name="author" placeholder="Автор книги" value="" />
    <input type="submit" value="Поиск" />
</form>

<table>
    <tr>
        <th>Название</th>
        <th>Автор</th>
        <th>Год выпуска</th>
        <th>Жанр</th>
        <th>ISBN</th>
    </tr>
	<tbody>
   <?php
		while ($data=mysqli_fetch_array($res))
		{
	?>
        <tr>
            <td><?= $data['id'];?></td>
            <td><?= $data['name'];?></td>
            <td><?= $data['author'];?></td>
            <td><?= $data['year'];?></td>
            <td><?= $data['isbn'];?></td>
            <td><?= $data['genre'];?></td>
        </tr>
    <?php 
		}
	?>
    </tbody>
</table>