<?php 

$I = new AcceptanceTester($scenario);

$I->wantTo('Create a 2 test courses');
$I->login('admin', 'pepito.P0', 'Admin User');

$I->createCourse('Test Course Sec.1 2015', '123-S-WC101-1-1', 'QA / QA Invierno 2015');
$I->createCourse('Test Course Sec.2 2015', '123-S-WC101-2-1', 'QA / QA Invierno 2015');

?>