<?php

use Codeception\Module\LoginController;
use Codeception\Module\ReservaController;

$I = new AcceptanceTester($scenario);
$U = new LoginController($I);
$R = new ReservaController($I);

$I->wantTo('Create UAI Campus');
$U->login('admin', 'pepito.P0', 'Admin User');

$I->amOnPage('local/reservasalas/sedes.php?lang=en');

$I->see('Create new campus');

for ($i = 0; $i < count($R->crear()); $i++) {
	
	$I->dontSee($R->crear()[$i]->nombre_sede);
	
	$I->click('Create new campus');
	$I->fillField('sede', $R->crear()[$i]->nombre_sede);
	$I->click('submitbutton');
	$I->see($R->crear()[$i]->nombre_sede);
}


?>