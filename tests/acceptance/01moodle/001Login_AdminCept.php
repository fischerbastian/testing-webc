<?php

use Codeception\Module\MoodleController;

$I = new AcceptanceTester($scenario);
$U = new MoodleController($I);

$I->wantTo('Log In as Admin User');
$U->login('admin', 'pepito.P0','Admin User');

?>