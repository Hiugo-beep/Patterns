<?php
include ('builder/AutoloaderBuilder.php');

##  http://localhost:81/

$controller = new PatternsController();

$controller->useBuilder();