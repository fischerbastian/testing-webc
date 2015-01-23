<?php

use Codeception\Module\UserController;

$I = new AcceptanceTester($scenario);
$U = new UserController($I);

$I->wantTo('Config Email');
$U->login('admin', 'pepito.P0', 'Admin Usuario');


// Email Activation
$I->amOnPage('/admin/settings.php?section=messagesettingemail');
$I->see('Email');
$I->fillField('s__smtphosts','mx1.uai.cl');
$I->click('Save changes');
?>
