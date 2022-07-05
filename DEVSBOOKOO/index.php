<?php

require 'config.php';
require 'models/auth.php';

$auth = new Auth($pdo, $base);
$userInfo = $auth->checkToken();

echo 'Index';