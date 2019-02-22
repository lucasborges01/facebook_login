<?php 
require "fb.php";

$helper = $fb->getRedirectLoginHelper();
$permissions = array('email');
$loginUrl = $helper->getLoginUrl('http://localhost/facebook_login/callback.php', $permissions);

?>

<a href="<?php echo htmlspecialchars($loginUrl); ?>">Login com o Facebook</a>