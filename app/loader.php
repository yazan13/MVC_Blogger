
<?php
session_start();

include 'configs/config.php';
include 'helpers/redirect.php';

spl_autoload_register(function ($inc) {

    require 'libraries/' . $inc . '.class.php';
});
