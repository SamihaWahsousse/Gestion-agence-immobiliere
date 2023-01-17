<?php
include_once('includes/header.php');
require_once('bdd/config.php');
require_once('lib/user.php');
session_start();
session_destroy();
header('location:login.php');