<?php
require_once("functions.php"); # functions.phpを参照することでfunctions.phpで定義している定数や関数を使うことができる。

$todo_list = read_todo_list(false);

for ($i = 0; $i < count($todo_list); $i++) { 
    $todo = $todo_list[$i];
    echo $todo[0] . ":" . $todo[1] . "(" . $todo[2] . ")" . PHP_EOL;
}