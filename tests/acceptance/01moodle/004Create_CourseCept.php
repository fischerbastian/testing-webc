<?php 

use Codeception\Module\LoginController;
use Codeception\Module\CourseController;

$I = new AcceptanceTester($scenario);
$U = new LoginController($I);
$O = new CourseController($I);

$I->wantTo('Create a 2 test courses');
$U->login('admin', 'pepito.P0', 'Admin User');

$O->createCourse('Test Course B', 'test2', 'Pregrado / Pregrado Santiago');
?>