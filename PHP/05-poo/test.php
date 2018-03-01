<?php 
namespace Simplon;

include ("web.php");
include ("lit.php");

use Simplon\Web\Prof;
use Simplon\Literature\Prof as Lprof;

$obj1 = new Prof();
var_dump(get_class($obj1)); // \Simplon\Web\Prof

$obj2 = new Lprof();
var_dump(get_class($obj2)); // \Simplon\Literature\Prof
