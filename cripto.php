<?php
$senha = "1234@1234";

$embaralhar = password_hash($senha, PASSWORD_DEFAULT);

echo $embaralhar
?>