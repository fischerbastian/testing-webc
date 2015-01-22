<?php
use Codeception\Module\UserController;
use Codeception\Module\ReservaController;

$I = new AcceptanceTester ( $scenario );
$U = new UserController ($I);
$R = new ReservaController ($I);

$U->login ('admin', 'pepito.P0', 'Admin Usuario');

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