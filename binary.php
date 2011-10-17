<?php
$file = __FILE__;
include 'highlight.php';

$a = 0b0001;
var_dump($a);

$b = $a * 0b0010 + (0b0100<<2);
var_dump($b);
