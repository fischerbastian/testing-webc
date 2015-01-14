<?php

// Log In Admin
$I = new AcceptanceTester($scenario);
$I->wantTo('Create 1 Campus');
$I->amOnPage('/?lang=en');
$I->click('Log in', 'div.logininfo');
$I->fillField('username', 'admin');
$I->fillField('password', 'pepito.P0');
$I->click('loginbtn');
$I->see('You are logged in as', 'div.logininfo');
$I->seeLink('Admin Usuario');

$I->amOnPage('local/reservasalas/sedes.php?lang=en');
$I->see('Create new campus');
$I->click('Create new campus');
$I->fillField('sede', 'Penalolen');
$I->click('submitbutton');
$I->see('Penalolen');
?>