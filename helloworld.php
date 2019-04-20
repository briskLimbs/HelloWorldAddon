<?php
  
$addons = new Addons();
define('HELLOWORLD_CORE_PATH', __DIR__);
define('HELLOWORLD_CORE_NAME', basename(HELLOWORLD_CORE_PATH));
$pages = HELLOWORLD_CORE_NAME . '|pages';

function sayHello() {
	global $limbs;
	echo $limbs->database->getOne('hello_world')['message'];
}

$menu = array(
  'hello_world' => array(
    'display_name' => 'HelloWorld',
    'sub' => array(
      'Edit Message' => $pages . '|welcome.php'
    )
  )
);

$addons->addMenu($menu);
$addons->addTrigger('sayHello', 'watch_sidebar_top');