<?php

use Codeception\Module\MoodleController;
use Codeception\Module\ReservaController;

$I = new AcceptanceTester($scenario);
$U = new MoodleController($I);
$R = new ReservaController($I);

$I->wantTo('Create UAI Buildings');
$U->login ('admin', 'pepito.P0', 'Admin User');

$I->amOnPage ('local/reservasalas/edificios.php?lang=en');

$I->see ('Create buildings');

for($x = 0; $x < count ($R->crear ()); $x ++) {
	
	for($y = 0; $y < count ( $R->crear ()[$x]->edificios); $y ++) {
		
		$I->click ('Create buildings');
		$I->selectOption( 'Campus: ', $R->crear ()[$x]->nombre_sede);	
		$I->fillField('New Building: ', $R->crear ()[$x]->edificios [$y]->nombre_edificio);
		$I->fillField ('Modules: ', $R->crear ()[$x]->edificios [$y]->modulo);
		$I->click('Create new building');
	}
}

?>