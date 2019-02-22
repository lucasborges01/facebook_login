<?php 
session_start();
require "Facebook/autoload.php";

$fb = new \Facebook\Facebook([
  'app_id' => '392484034841943',
  'app_secret' => 'b2a047eeaaa75b4b0197a11219489dda',
  'default_graph_version' => 'v2.10',  
]);