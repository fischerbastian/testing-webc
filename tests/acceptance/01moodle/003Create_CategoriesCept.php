<?php

use Codeception\Module\LoginController;
use Codeception\Module\CategoryController;

$I = new AcceptanceTester($scenario);
$U = new LoginController($I);
$O = new CategoryController($I);

$I->wantTo('Create Webcursos categories');
$U->login('admin', 'pepito.P0', 'Admin User');

$O->createCategory('QA', '0');
$O->createCategory('QA Invierno 2015', 'QA');

?>