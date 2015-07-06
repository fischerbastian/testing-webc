<?php

use Codeception\Module\MoodleController;

$I = new AcceptanceTester($scenario);
$U = new MoodleController($I);

$I->wantTo('Create users for Emarking and Reserva de salas');

$U->login('admin', 'pepito.P0', 'Admin User');

$U->createUser('central_apuntes', 'pepito.P0', 'Central', 'de Apuntes', 'centralapuntes@unmail.com');
$U->createUser('biblioteca', 'pepito.P0', 'Admin', 'Biblioteca', 'adminbiblioteca@unmail.com');

?>