<?php

use Codeception\Module\MoodleController;

$I = new AcceptanceTester($scenario);
$U = new MoodleController($I);

$I->wantTo('Create Webcursos categories');
$U->login('admin', 'pepito.P0', 'Admin User');

$U->createCategory('QA', '0');
$U->createCategory('QA Invierno 2015', 'QA');

?>