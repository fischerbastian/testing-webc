<?php 

use Codeception\Module\LoginController;
use Codeception\Module\CourseController;

$I = new AcceptanceTester($scenario);
$U = new LoginController($I);
$O = new CourseController($I);

$I->wantTo('Create a 2 test courses');
$U->login('admin', 'pepito.P0', 'Admin User');

$O->createCourse('Test Course Sec.1 2015', '123-S-WC101-1-1', 'QA / QA Invierno 2015');
$O->createCourse('Test Course Sec.2 2015', '123-S-WC101-2-1', 'QA / QA Invierno 2015');
?>