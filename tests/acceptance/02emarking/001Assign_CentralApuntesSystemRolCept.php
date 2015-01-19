<?php

use Codeception\Module\UserController;

$I = new AcceptanceTester($scenario);
$U = new UserController($I);

$I->wantTo('Assign Central de apuntes System rol to "CENTRAL DE APUNTES" user');
$U->login('admin', 'pepito.P0','Admin Usuario');

$I->amOnPage('admin/roles/assign.php?contextid=1&lang=en');
$I->see('Assign roles in System');

// User "CENTRAL DE APUNTES" is added to the global role

$I->seeLink('Central de Apuntes');
$I->click('Central de Apuntes');

$I->fillField('addselect_searchtext', 'CENTRAL DE APUNTES');
$I->selectOption('addselect[]','CENTRAL DE APUNTES (central_apuntes@unmail.com)');
$I->click('add');

$I->amOnPage('admin/roles/assign.php?contextid=1&lang=en');
$I->seeLink('CENTRAL DE APUNTES');


?>