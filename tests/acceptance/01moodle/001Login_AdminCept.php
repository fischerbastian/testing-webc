<?php

use Codeception\Module\LoginController;

$I = new AcceptanceTester($scenario);
$U = new LoginController($I);

$I->wantTo('Log In as Admin User');
$U->login('admin', 'pepito.P0','Admin User');

?>