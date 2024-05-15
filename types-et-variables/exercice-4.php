<?php
$data = 42;
echo gettype($data);
echo "<br>";
$float = (float) $data;
echo gettype($float);
echo "<br>";
$str = (string) $float;
echo gettype($str);
