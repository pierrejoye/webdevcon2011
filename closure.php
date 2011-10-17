<?php
$file = __FILE__;
include 'highlight.php';

class Book {
	public $authors;
	public $walk_func = 'ucwords';

	function __construct()
	{
		$this->authors = array(
		'john smith',
		'Darth vador',
		'james t. Kirk'
		);
	}

	function printAuthors()
	{
		array_walk($this->authors, function($item, $key) {
				$func = $this->walk_func;
				echo $func($item) . "\n";
			}
		);
	}
}

$mybook = new Book;
$mybook->printAuthors();
