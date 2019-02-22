<?php 
require "fb.php";

$helper = $fb->getRedirectLoginHelper();

try {
  $_SESSION['fb_access_token'] = (string) $helper->getAccessToken();
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  // When Graph returns an error
  echo 'Erro: '.$e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  // When validation fails or other local issues
  echo 'Erro SDK: '.$e->getMessage();
  exit;
}

header("Location: index.php");


?>