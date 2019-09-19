<?php
// Write a PHP script which decodes the following JSON string.
$json = '{"Title": "The Cuckoos Calling",
	"Author": "Robert Galbraith",
	"Detail": {
	"Publisher": "Little Brown"
  }}';

  $json_d = json_decode($json, true);
  echo "Title: ".$json_d['Title']."<br>";
  echo "Author: ".$json_d['Author']."<br>";
  echo "Publisher: ".$json_d['Detail']['Publisher']."<br>";

?>