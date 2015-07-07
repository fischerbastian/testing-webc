<?php

$I = new AcceptanceTester($scenario);

$I->wantTo('Create Webcursos categories');
$I->login('admin', 'pepito.P0', 'Admin User');

$I->createCategory('QA', '0');
$I->createCategory('QA Invierno 2015', 'QA');

?>