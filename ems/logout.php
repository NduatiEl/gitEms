<?php
require 'core/functions/users.php';
session_destroy();
header('location: index.php');