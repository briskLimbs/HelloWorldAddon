<?php

global $database;
$table = 'hello_world';
$columns = array(
    'id' => array('type' => 'int(1)', 'special' => 'primary'),
    'message' => array('type' => 'text')
  );

$values = array(
  array('message' => 'Welcome to this website')
);

$database->createTable($table, $columns);
$database->insertMulti($table, $values);