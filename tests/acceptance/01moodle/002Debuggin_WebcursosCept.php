<?php

use Codeception\Module\MoodleController;

$I = new AcceptanceTester($scenario);
$U = new MoodleController($I);

$I->wantTo('Activate Debuggin Mode');
$U->login('admin', 'pepito.P0', 'Admin User');

// Moodle Debug mode
$I->amOnPage('/admin/settings.php?section=debugging');
$I->selectOption('#id_s__debug','DEVELOPER: extra Moodle debug messages for developers');
$I->click('Save changes');

?>