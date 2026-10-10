<?php
$prodId = $_POST['id'];
$header = 'Location: ../../index.php?page=productdetail&id='.$prodId.'&coment=1';
header($header);


