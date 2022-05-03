<?php

require_once("./Logger.php");
require_once("./Warriors.php");
require_once("./LoggerManager.php");

$logger = new Logger(STDOUT, Logger::TRACE);
$loggerManager = new LoggerManager(Logger::TRACE);
$warrior = new Warriors();
$logger->trace("123123123");
