<?php 

require_once "scssphp-0.6.7/scss.inc.php";
use Leafo\ScssPhp\Compiler;
use Leafo\ScssPhp\Server;
$directory = "scssphp-0.6.7/";

$scss = new Compiler();
$scss->setFormatter('Leafo\ScssPhp\Formatter\Nested');

/* $scss->setImportPaths("../");
echo $scss->compile('@import "style.scss";'); */

$server = new Server($directory, null, $scss);
$server->serve();

?>