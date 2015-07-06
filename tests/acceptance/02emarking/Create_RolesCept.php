<?php

use Codeception\Module\MoodleController;

$I = new AcceptanceTester($scenario);
$U = new MoodleController($I);

$I->wantTo('Create user roles for emarking and reserva de salas');
$U->login('admin', 'pepito.P0', 'Admin User');

// Rol Centra de Apuntes
$I->amOnPage('admin/roles/define.php?action=add&lang=en');
$I->click('submitbutton');

$I->fillField('shortname', 'central_apuntes');
$I->fillField('name', 'Central de Apuntes');

$I->checkOption('#cl10');
$I->checkOption('#cl30');
$I->checkOption('#cl40');

$I->checkOption('(//input[@name="mod/emarking:downloadexam"])[2]');
$I->checkOption('(//input[@name="mod/emarking:receivenotification"])[2]');

$I->checkOption('(//input[@name="mod/emarking:printordersview"])[2]');

$I->click('Create this role');
$I->click('List all roles');
$I->amOnPage('admin/roles/manage.php?lang=en');
$I->seeLink('Central de Apuntes');

// Rol Ayudante
$I->amOnPage('admin/roles/define.php?action=add&lang=en');
$I->click('submitbutton');

$I->fillField('shortname', 'ayudante');
$I->fillField('name', 'Ayudante');

$I->checkOption('#cl10');

$I->checkOption('(//input[@name="mod/emarking:assignmarkers"])[2]');
$I->checkOption('(//input[@name="mod/emarking:grade"])[2]');
$I->checkOption('(//input[@name="mod/emarking:supervisegrading"])[2]');
$I->checkOption('(//input[@name="mod/emarking:view"])[2]');
$I->checkOption('(//input[@name="mod/emarking:viewpeerstatistics"])[2]');

$I->click('Create this role');
$I->click('List all roles');
$I->amOnPage('admin/roles/manage.php?lang=en');
$I->seeLink('Ayudante');

?>