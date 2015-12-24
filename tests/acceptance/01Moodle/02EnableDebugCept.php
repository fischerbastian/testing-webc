<?php

$I = new AcceptanceTester($scenario);

$I->wantTo('Activate Debuggin Mode');
$I->login('admin', 'pepito.P0', 'Admin User');

// Moodle Debug mode
$I->amOnPage('/admin/settings.php?section=debugging');
$I->selectOption('#id_s__debug','NORMAL: Show errors, warnings and notices');
$I->click('Save changes');

?>