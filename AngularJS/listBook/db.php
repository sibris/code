<?php

$db = @mysqli_connect('localhost', 'root', '', 'angularjs') or die('Ошибка соединения!');
mysqli_set_charset($db, 'utf8') or die('Не установлена кодировка');