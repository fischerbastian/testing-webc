<?php
use Codeception\Module\LoginController;
use Codeception\Module\CreateUserController;

$I = new AcceptanceTester($scenario);
$U = new LoginController($I);
$O = new CreateUserController($I);

$I->wantTo('Create users for Emarking and Reserva de salas');

$U->login('admin', 'pepito.P0', 'Admin User');

$O->createUser('central_apuntes', 'pepito.P0', 'Central', 'de Apuntes', 'centralapuntes@unmail.com');
$O->createUser('biblioteca', 'pepito.P0', 'Admin', 'Biblioteca', 'adminbiblioteca@unmail.com');

?>