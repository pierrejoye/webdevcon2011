<?php
$file = __FILE__;
include 'highlight.php';

$a1 = array('element1'=>array('name'=> 'John Doe', 'age'=>32), 'element2'=>array('name'=> 'Leonidas Lampion', 'age'=>53));
$a2  = array('element1' => array(
						'name'=> 'John Doe',
						'age'=>32
						),
			'element2' => array(
						'name'=> 'Leonidas Lampion',
						'age'=>53
						)
			);
			
$a3  = ['element1' => [
						'name'=> 'John Doe',
						'age'=>32
						],
			'element2' => [
						'name'=> 'Leonidas Lampion',
						'age'=>53
						]
			];

echo '<pre>';
print_r($a1);
echo "\n";
print_r($a2);
echo "\n";
print_r($a3);
echo '</pre>';

