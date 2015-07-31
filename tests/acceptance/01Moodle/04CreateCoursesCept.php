<?php 

$I = new AcceptanceTester($scenario);

$I->wantTo('Create a 2 test courses');
$I->login('admin', 'pepito.P0', 'Admin User');

$I->createCourse('Test Course Sec.1 2015', '1349-S-TICS331-1-1-2015', 'QA / QA Invierno 2015');
$I->createCourse('Test Course Sec.2 2015', '1349-S-TICS331-2-1-2015', 'QA / QA Invierno 2015');

?>