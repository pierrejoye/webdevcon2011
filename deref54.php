<?php
$file = __FILE__;
include 'highlight.php';

Class Book {
	function getProperties()
	{
		return [
			'topseller' => true,
			'collector' => false
			];
	}
}

$mybook = new Book;
if ($mybook->getProperties()['topseller']) {
	echo "top seller!";
}
