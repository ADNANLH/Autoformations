<?php

//adding a name space in file 1 
namespace Html;
class Table {
  public $title = "";
  public $numRows = 0;
  public function message() {
    echo "<p>Table '{$this->title}' has {$this->numRows} rows.</p>";
  }
}
$table = new Table();
$table->title = "My table";
$table->numRows = 5;
?>

<!DOCTYPE html>
<html>
<body>

<?php
//display the function in the namespace
$table->message();
?>

<?php
//get the function from nSpace 1 to another file
include "Html.php";
use Html as H;
$table = new H\Table();
$table->title = "My table";
$table->numRows = 5;
?>

<html>
<body>

<?php $table->message(); ?>