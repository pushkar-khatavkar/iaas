<?php
$config = parse_ini_file('../config.ini');
$conn = new mysqli($config['servername'],$config['username'],$config['password'],$config['dbname']);
?>