<?php

$I = new AcceptanceTester($scenario);

$I->wantTo('Create user roles for emarking and reserva de salas');
$I->login('admin', 'pepito.P0', 'Admin User');

$I->amOnPage('admin/roles/define.php?action=add');
$I->click('submitbutton');

$I->fillField('shortname', 'central_apuntes');
$I->fillField('name', 'Central de Apuntes');

$I->checkOption('#cl10');
$I->checkOption('#cl30');
$I->checkOption('#cl40');

$I->checkOption('(//input[@name="mod/emarking:downloadexam"])[2]');
$I->checkOption('(//input[@name="mod/emarking:receivenotification"])[2]');

$I->checkOption('(//input[@name="mod/emarking:printordersview"])[2]');

$I->click('savechanges');