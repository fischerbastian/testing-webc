<?php

// Log In Admin
$I = new AcceptanceTester($scenario);
$I->wantTo('Assign Biblioteca System rol to "ADMINISTRADOR BIBLIOTECA" user');
$I->amOnPage('/?lang=en');
$I->click('Log in', 'div.logininfo');
$I->fillField('username', 'admin');
$I->fillField('password', 'pepito.P0');
$I->click('loginbtn');
$I->see('You are logged in as', 'div.logininfo');
$I->seeLink('Admin Usuario');

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