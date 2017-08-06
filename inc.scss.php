<?php 

require_once "scssphp-0.6.7/scss.inc.php";
use Leafo\ScssPhp\Compiler;
use Leafo\ScssPhp\Server;
$directory = "scssphp-0.6.7/";

$scss = new Compiler();
//$scss->setFormatter('Leafo\ScssPhp\Formatter\Compressed');
$scss->setFormatter('Leafo\ScssPhp\Formatter\Compact');
//$scss->setImportPaths('');

$server = new Server($directory, null, $scss);
$server->serve();

?>