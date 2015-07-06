<?php

use Codeception\Module\MoodleController;

$I = new AcceptanceTester($scenario);
$U = new MoodleController($I);

$I->wantTo('Config Email');
$U->login('admin', 'pepito.P0', 'Admin User');

// Email Activation

$I->amOnPage('/admin/settings.php?section=messagesettingemail');
$I->see('Email');
$I->fillField('s__smtphosts','mx1.uai.cl');
$I->click('Save changes');

?>
