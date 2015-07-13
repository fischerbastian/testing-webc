<?php
$I = new AcceptanceTester($scenario);

$I->wantTo('Create a Rubirc for a Emarking activiy');

$I->login('admin','pepito.P0','Admin User');

$activityId = $I->IdEmarkingActivity('Test Course Sec.1 2015', 'test1');

?>