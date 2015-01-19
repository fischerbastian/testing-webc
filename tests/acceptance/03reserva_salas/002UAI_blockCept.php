<?php 

use Codeception\Module\UserController;

$I = new AcceptanceTester($scenario);
$U = new UserController($I);

$I->wantTo('Check if UAI block is enabled');
$U->login('admin', 'pepito.P0','Admin Usuario');

// Check UAI block
$I->see('UAI', 'div.title');
$I->click('Study Rooms', 'div.content');
$I->see('Settings', 'div.content');



?>