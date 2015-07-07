<?php

$I = new AcceptanceTester($scenario);

$I->wantTo('Config Email');
$I->login('admin', 'pepito.P0', 'Admin User');

// Email Activation
$I->amOnPage('/admin/settings.php?section=messagesettingemail');
$I->see('Email');
$I->fillField('s__smtphosts','mx1.uai.cl');
$I->click('Save changes');

?>
