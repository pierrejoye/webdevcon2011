<?php
Class Book {
	function getProperties()
	{
		return array(
			'topseller' => true,
			'collector' => false
		);
	}
}

$mybook = new Book;
$prop = $mybook->getProperties();
if ($prop['topseller']) {
	echo "top seller!";
}
