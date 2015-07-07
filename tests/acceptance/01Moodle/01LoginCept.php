<?php 

$I = new AcceptanceTester($scenario);
$I->wantTo('Login as Admin');

$I->login('admin','pepito.P0','Admin User');
?>