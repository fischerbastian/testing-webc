<?php

use Codeception\Module\UserController;

$I = new AcceptanceTester($scenario);
$U = new UserController($I);

$I->wantTo('Log In as Admin User');
$U->login('admin', 'pepito.P0','Admin Usuario');

?>