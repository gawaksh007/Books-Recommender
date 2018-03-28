<?php

require_once("recommend.php");
require_once("sample_list.php");


$re = new Recommend();
print_r("List of recommended books for sameer");
print_r($re->getRecommendations($books, "sameer"));

?>
