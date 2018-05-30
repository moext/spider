<?php

/**
*	Usage:
*	php spider.php class {if is not method default execute run()}
*	php spider.php class method
*	php spider.php class method argv1 argv2...
*
*/

if (is_array($argv) && count($argv)) {
	// remove the first member in $argv. It's file name.
	array_shift($argv);
	// include class file
	require_once(dirname(__FILE__) . '/class/' . $argv[0] . 'Class.php');

	$class = ucwords($argv[0]) . 'Class';
	$object = new $class;

	$count = count($argv);
	if ($count < 5) {
		switch ($count) {
			case 1:
				$object->run();
				break;
			case 2:
				$method = $argv[1];
				call_user_func([$object, $method]);
				break;
			default:
				$method = $argv[1];
				call_user_func([$object, $method], $argv[2], $argv[3]);			
				break;
		}
	} else {
		echo 'supports up to two parameters!' . PHP_EOL;
	}
} else {
	echo 'get parameters error!' . PHP_EOL;
}


