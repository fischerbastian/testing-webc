<?php
$I = new AcceptanceTester($scenario);

$I->wantTo('Grab id from activity');

$I->login('admin','pepito.P0','Admin User');

$activityId = $I->IdEmarkingActivity('Test Course Sec.1 2015', 'test1');

?>