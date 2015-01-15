<?php

// Log In Admin
$I = new AcceptanceTester($scenario);
$I->wantTo('Create UAI Campus');
$I->amOnPage('/?lang=en');
$I->click('Log in', 'div.logininfo');
$I->fillField('username', 'admin');
$I->fillField('password', 'pepito.P0');
$I->click('loginbtn');
$I->see('You are logged in as', 'div.logininfo');
$I->seeLink('Admin Usuario');

$I->amOnPage('local/reservasalas/sedes.php?lang=en');
$uai_places = array('Pe&ntilde;alol&eacute;n', 'Vi&ntilde;a del Mar', 'Miami');
$I->see('Create new campus');

foreach ($uai_places as $place){
	
	$I->dontSee($place);
	
	$I->click('Create new campus');
	$I->fillField('sede', $place);
	$I->click('submitbutton');
	$I->see($place);
}

?>