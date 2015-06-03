<?php

use Codeception\Module\LoginController;

$I = new AcceptanceTester($scenario);
$U = new LoginController($I);

$I->wantTo('Assign Biblioteca System rol to "ADMINISTRADOR BIBLIOTECA" user');
$U->login('admin', 'pepito.P0','Admin User');

$I->amOnPage('admin/roles/assign.php?contextid=1&lang=en');
$I->see('Assign roles in System');

// User "CENTRAL DE APUNTES" is added to the global role

$I->seeLink('Biblioteca');
$I->click('Biblioteca');

$I->fillField('addselect_searchtext', 'ADMINISTRADOR BIBLIOTECA');
$I->selectOption('addselect[]','ADMINISTRADOR BIBLIOTECA (admin_biblioteca@unmail.com)');
$I->click('add');

$I->amOnPage('admin/roles/assign.php?contextid=1&lang=en');
$I->seeLink('ADMINISTRADOR BIBLIOTECA');


?>