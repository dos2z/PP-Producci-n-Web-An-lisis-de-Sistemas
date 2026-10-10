<?php
echo "<h1>Holaa prod detail</h1> <br>";
echo $_GET['id'];

header("Location: ../../index.php?page=productdetail&id=" . $_GET['id']);