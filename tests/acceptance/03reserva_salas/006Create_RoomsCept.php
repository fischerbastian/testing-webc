<?php
use Codeception\Module\ReservaController;

$I = new AcceptanceTester ( $scenario );
$U = new UserController ( $I );
$R = new ReservaController ( $I );

$I->wantTo ( 'Create UAI Rooms' );
$U->login ( 'admin', 'pepito.P0', 'Admin Usuario' );

$I->amOnPage ( 'local/reservasalas/salas.php' );

$I->see ( 'Create new rooms' );

$I->click ( 'Create new rooms' );

?>