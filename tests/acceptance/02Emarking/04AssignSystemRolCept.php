<?php

$I = new AcceptanceTester($scenario);

$I->wantTo('Assign Central de apuntes System rol to "CENTRAL DE APUNTES" user');
$I->login('admin', 'pepito.P0','Admin User');

$I->amOnPage('/admin/roles/assign.php?contextid=1&lang=en');
$I->see('Assign roles in System');

// User "CENTRAL DE APUNTES" is added to the global role
$I->seeLink('Central de Apuntes');
$I->click('Central de Apuntes');

$I->selectOption('addselect[]','Central  de Apuntes (centralapuntes@unmail.com)');
$I->click('add');

?>