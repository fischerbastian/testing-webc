<?php

use Codeception\Module\UserController;

$I = new AcceptanceTester($scenario);
$U = new UserController($I);

$I->wantTo('Create users');
$U->login('admin', 'pepito.P0', 'Admin Usuario');

// Create 40 "Alumno" users

for ($n = 1; $n <= 40; $n++) {
	
	$I->amOnPage('user/editadvanced.php?id=-1&lang=en');
	$I->seeLink('Add a new user');
	
	$I->fillField('username', 'alumno'.$n);
	$I->fillField('newpassword', 'pepito.P0');
	$I->fillField('firstname', 'ALUMNO');
	$I->fillField('lastname', $n);
	$I->fillField('email', 'alumno'.$n.'@unmail.com');
	$I->click('submitbutton');
	
	$I->amOnPage('admin/user.php?lang=en&perpage=100');
	$I->seeLink('ALUMNO '.$n);
	
}

// Create 2 "Profesor" users

for ($n = 1; $n <= 2; $n++) {

	$I->amOnPage('user/editadvanced.php?id=-1&lang=en');
	$I->seeLink('Add a new user');

	$I->fillField('username', 'profesor'.$n);
	$I->fillField('newpassword', 'pepito.P0');
	$I->fillField('firstname', 'PROFESOR');
	$I->fillField('lastname', $n);
	$I->fillField('email', 'profesor'.$n.'@unmail.com');
	$I->click('submitbutton');

	$I->amOnPage('admin/user.php?lang=en&perpage=100');
	$I->seeLink('PROFESOR '.$n);
	
}

// Create 4 "Ayudante" users

for ($n = 1; $n <= 4; $n++) {

	$I->amOnPage('user/editadvanced.php?id=-1&lang=en');
	$I->seeLink('Add a new user');

	$I->fillField('username', 'ayudante'.$n);
	$I->fillField('newpassword', 'pepito.P0');
	$I->fillField('firstname', 'AYUDANTE');
	$I->fillField('lastname', $n);
	$I->fillField('email', 'ayudante'.$n.'@unmail.com');
	$I->click('submitbutton');

	$I->amOnPage('admin/user.php?lang=en&perpage=100');
	$I->seeLink('AYUDANTE '.$n);

}

// Create 1 "Central de apuntes" user

$I->amOnPage('user/editadvanced.php?id=-1&lang=en');
$I->seeLink('Add a new user');

$I->fillField('username', 'central_apuntes');
$I->fillField('newpassword', 'pepito.P0');
$I->fillField('firstname', 'CENTRAL');
$I->fillField('lastname', 'DE APUNTES');
$I->fillField('email', 'central_apuntes@unmail.com');
$I->click('submitbutton');

$I->amOnPage('admin/user.php?lang=en&perpage=100');
$I->seeLink('CENTRAL DE APUNTES');

// Create 1 "Admin Biblioteca" user

$I->amOnPage('user/editadvanced.php?id=-1&lang=en');
$I->seeLink('Add a new user');

$I->fillField('username', 'admin_biblioteca');
$I->fillField('newpassword', 'pepito.P0');
$I->fillField('firstname', 'ADMINISTRADOR');
$I->fillField('lastname', 'BIBLIOTECA');
$I->fillField('email', 'admin_biblioteca@unmail.com');
$I->click('submitbutton');

$I->amOnPage('admin/user.php?lang=en&perpage=100');
$I->seeLink('ADMINISTRADOR BIBLIOTECA');
?>