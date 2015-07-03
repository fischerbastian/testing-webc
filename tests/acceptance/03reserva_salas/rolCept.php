<?php

use Codeception\Module\LoginController;

$I = new AcceptanceTester($scenario);
$U = new LoginController($I);

$I->wantTo('Create user roles for emarking and reserva de salas');
$U->login('admin', 'pepito.P0', 'Admin User');

// Rol Biblioteca
$I->amOnPage('admin/roles/define.php?action=add&lang=en');
$I->click('submitbutton');

$I->fillField('shortname', 'biblioteca');
$I->fillField('name', 'Biblioteca');

$I->checkOption('#cl10');

$I->checkOption('(//input[@name="local/reservasalas:advancesearch"])[2]');
$I->checkOption('(//input[@name="local/reservasalas:blocking"])[2]');
$I->checkOption('(//input[@name="local/reservasalas:bockinginfo"])[2]');
$I->checkOption('(//input[@name="local/reservasalas:libreryrules"])[2]');
$I->checkOption('(//input[@name="local/reservasalas:overwrite"])[2]');

$I->click('Create this role');
$I->click('List all roles');
$I->amOnPage('admin/roles/manage.php?lang=es');
$I->seeLink('Biblioteca');

?>