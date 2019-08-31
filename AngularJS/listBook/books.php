<?php

require 'db.php';

$res = mysqli_query($db, "SELECT * FROM books");
$books = mysqli_fetch_all($res, MYSQLI_ASSOC);
exit(json_encode($books));

// $data = json_decode(file_get_contents("php://input"));
// $data2 = json_decode(trim(file_get_contents("php://input")), true);