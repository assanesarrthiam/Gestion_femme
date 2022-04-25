<?php
require_once "./model/entreprisedb.php";
$entreprisedb=new entreprisedb();
$data=$entreprisedb->selectAll();