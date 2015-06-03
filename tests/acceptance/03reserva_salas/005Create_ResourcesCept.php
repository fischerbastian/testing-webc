<?php
use Codeception\Module\LoginController;
use Codeception\Module\ReservaController;

$I = new AcceptanceTester($scenario);
$U = new LoginController($I);
$R = new ReservaController($I);

$I->wantTo('Create UAI Buildings');
$U->login ('admin', 'pepito.P0', 'Admin User');

$I->amOnPage ('local/reservasalas/edificios.php?lang=en');

$I->see ('Create Resources');
$I->fillField('resource', $value);

?>