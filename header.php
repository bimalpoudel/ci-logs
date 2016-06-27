<?php
# Include this file in head of CI/index.php

/**
 * JSON Submitted Data
 */
$_p = json_decode(file_get_contents('php://input'), true);
if(empty($_POST) && $_p)
{
	$_POST = $_p;
}
$log = "
%s: %s
	GET: %s
	POST: %s
";
$timestamp = date('YmdHis');
$log = sprintf($log, $_SERVER['REQUEST_URI'], $timestamp, print_r($_GET, true), print_r($_POST, true));
file_put_contents(sprintf('%s/logs/urls-%s.log', dirname(__FILE__), $timestamp), $log, FILE_APPEND);

ob_start();
