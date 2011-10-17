<?php
$file = __FILE__;
include 'highlight.php';

trait JsonConverter {
	public function toArray()
	{
		$props = array();
		foreach ($this as $name => $value) {
			if (is_object($value)) {
				$properties[$name] = $value->toArray();
			} else {
				$properties[$name] = $value;
			}
		}
		return $properties;
	}

	public function toJson()
	{
		return json_encode($this);
	}
}

class Book {
	use JsonConverter;

	public $title;
	public $isbn;
	public $author;
}

class Author {
	use JsonConverter;
	public $name;
}

$author = new Author;
$author->name = 'Herman Melville';

$mybook = new Book;
$mybook->title = 'Moby-Dick'; 
$mybook->author = $author;
$mybook->isbn = '123456789012345';
echo '<pre>';

print_r($mybook->toArray());
echo "\n";
echo $mybook->toJson();
echo "\n";
echo $author->toJson();


echo '</pre>';
