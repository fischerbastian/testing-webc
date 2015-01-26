<?php
use Codeception\Module\UserController;
use Codeception\Module\ReservaController;

$I = new AcceptanceTester ( $scenario );
$U = new UserController ($I);
$R = new ReservaController ($I);

$I->wantTo('Create UAI Buildings');
$U->login ('admin', 'pepito.P0', 'Admin Usuario');

$I->amOnPage ('local/reservasalas/edificios.php?lang=en');

$I->see ('Create Resources');
$I->fillField('resource'', $value);

?>