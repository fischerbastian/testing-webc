<?php
// Log In Admin
$I = new AcceptanceTester($scenario);
$I->wantTo('Create user roles for emarking and reserva de salas');
$I->amOnPage('/?lang=en');
$I->click('Log in', 'div.logininfo');
$I->fillField('username', 'admin');
$I->fillField('password', 'pepito.P0');
$I->click('loginbtn');
$I->see('You are logged in as', 'div.logininfo');
$I->seeLink('Admin Usuario');

$I->amOnPage('admin/roles/define.php?action=add&lang=es');
$I->click('Continuar');

$I->fillField('shortname', 'central_apuntes');
$I->fillField('name', 'Central de Apuntes');

$I->checkOption('contextlevel10');
$I->checkOption('contextlevel30');
$I->checkOption('contextlevel40');

$I->checkOption('mod/emarking:downloadexam');
$I->checkOption('mod/emarking:receivenotification');

$I->checkOption('mod/emarking:printordersview');

$I->click('Crear este rol');
$I->click('Listar todos los roles');
$I->amOnPage('admin/roles/manage.php?lang=es');
$I->seeLink('Central de Apuntes');

// Rol Ayudante
$I->amOnPage('admin/roles/define.php?action=add&lang=es');
$I->click('Continuar');

$I->fillField('shortname', 'ayudante');
$I->fillField('name', 'Ayudante');

$I->checkOption('contextlevel10');

$I->checkOption('mod/emarking:assignmarkers');
$I->checkOption('mod/emarking:grade');
$I->checkOption('mod/emarking:supervisegrading');
$I->checkOption('mod/emarking:view');
$I->checkOption('mod/emarking:viewpeerstatistics');

$I->click('Crear este rol');
$I->click('Listar todos los roles');
$I->amOnPage('admin/roles/manage.php?lang=es');
$I->seeLink('Central de Apuntes');

// Rol Biblioteca
$I->amOnPage('admin/roles/define.php?action=add&lang=es');
$I->click('Continuar');

$I->fillField('shortname', 'biblioteca');
$I->fillField('name', 'Biblioteca');

$I->checkOption('contextlevel10');

$I->checkOption('local/reservasalas:advancesearch');
$I->checkOption('local/reservasalas:blocking');
$I->checkOption('local/reservasalas:bockinginfo');
$I->checkOption('local/reservasalas:libreryrules');
$I->checkOption('local/reservasalas:overwrite');

$I->click('Crear este rol');
$I->click('Listar todos los roles');
$I->amOnPage('admin/roles/manage.php?lang=es');
$I->seeLink('Central de Apuntes');

?>