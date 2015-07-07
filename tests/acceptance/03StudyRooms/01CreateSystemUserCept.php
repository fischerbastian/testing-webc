<?php

$I = new AcceptanceTester($scenario);

$I->wantTo('Create users for Emarking and Reserva de salas');

$I->login('admin', 'pepito.P0', 'Admin User');

$I->createUser('biblioteca', 'pepito.P0', 'Admin', 'Biblioteca', 'adminbiblioteca@unmail.com');

?>