<?php

/* Start session if there is none */
if(!isset($_SESSION)) session_start();


// load environment variable
require_once __DIR__. '/../app/config/_env.php';