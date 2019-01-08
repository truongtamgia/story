<?php 
$muser = new Model_Admin;
$data = $muser->listAll();
echo "<pre>";
print_r($data);
echo "</pre>";
echo "not as";
