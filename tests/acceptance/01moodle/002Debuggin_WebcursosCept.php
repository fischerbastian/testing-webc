<?php

use Codeception\Module\UserController;

$I = new AcceptanceTester($scenario);
$U = new UserController($I);

$I->wantTo('Activate Debuggin Mode');
$U->login('admin', 'pepito.P0', 'Admin Usuario');


// Debuggin Activation

$I->amOnPage('/admin/settings.php?section=local_uai');
$I->see('UAI');
$I->checkoption('#id_s__local_uai_debug');
$I->click('Save changes');

// Debuggin Second Part
$I->amOnPage('/admin/settings.php?section=debugging');
$I->selectOption('#id_s__debug','DEVELOPER: extra Moodle debug messages for developers');
$I->click('Save changes');
?>