<?php
require_once "./model/Regiondb.php";
$regiondb=new Regiondb();
$data=$regiondb->selectAll();