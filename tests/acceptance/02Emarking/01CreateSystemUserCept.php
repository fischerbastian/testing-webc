<?php

$I = new AcceptanceTester($scenario);

$I->wantTo('Create users for Emarking');

$I->login('admin', 'pepito.P0', 'Admin User');
$I->createUser('central_apuntes', 'pepito.P0', 'Central', 'de Apuntes', 'centralapuntes@unmail.com');

?>