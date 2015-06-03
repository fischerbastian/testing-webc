<?php

use Codeception\Module\LoginController;

$I = new AcceptanceTester($scenario);
$U = new LoginController($I);

$I->wantTo('Config SMS');
$U->login('admin', 'pepito.P0','Admin User');

$I->amOnPage('/admin/settings.php?section=modsettingemarking');

// Basic Config
$I->fillField('s__emarking_printsuccessinstructions','Mensaje de prueba');
$I->selectOption('#id_s__emarking_minimumdaysbeforeprinting','2');

// Advanced Config
$I->fillField('s__emarking_parallelregex','[0-9]+-[SV]-([0-9A-Z]+)-.*');

// Config SMS
$I->fillField('s__emarking_smsurl','http://api2.infobip.com/api/sendsms/xml');
$I->fillField('s__emarking_smsuser','UAI');
$I->fillField('s__emarking_smspassword','pepito.P0');

// Config Experimental
$I->checkOption('#id_s__emarking_enablejustice');
$I->checkOption('#id_s__emarking_justiceexperiment');
$I->checkOption('#id_s__emarking_enableprinting');
$I->fillField('s__emarking_printername','Mensaje de prueba');


$I->click('Save Changes');
?>