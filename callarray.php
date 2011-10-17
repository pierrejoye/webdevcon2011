<?php
$file = __FILE__;
include 'highlight.php';
class Hello {
        public function world($x) {
                 echo "Hello, $x\n";
                 return $this;
        }
}

$f = array('Hello','world');
var_dump($f('you'));
