<?php
require("class.php");

$rekening = new Rekeningen("bob", 29327423, 20000, 500, -10000);
$rekening2 = new Rekeningen("alice", 12345678, 15000, 300, -5000);
$rekening3 = new Rekeningen("charlie", 87654321, 50000, 1000, -20000);


include("class_view.php");
?>