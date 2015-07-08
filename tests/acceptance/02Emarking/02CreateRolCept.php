<?php

$I = new AcceptanceTester($scenario);

$I->wantTo('Create user roles for emarking and reserva de salas');
$I->login('admin', 'pepito.P0', 'Admin User');

$I->amOnPage('/admin/roles/define.php?action=add');
$I->click('submitbutton');

$I->fillField('shortname', 'ayudante');
$I->fillField('name', 'Ayudante');

$I->checkOption('#cl10');

$I->checkOption('(//input[@name="mod/emarking:assignmarkers"])[2]');
$I->checkOption('(//input[@name="mod/emarking:grade"])[2]');
$I->checkOption('(//input[@name="mod/emarking:supervisegrading"])[2]');
$I->checkOption('(//input[@name="mod/emarking:view"])[2]');
$I->checkOption('(//input[@name="mod/emarking:viewpeerstatistics"])[2]');

$I->click('savechanges');


?>