<?php
$I = new AcceptanceTester($scenario);

$I->wantTo('Grab id from Rubric');

$I->login('admin','pepito.P0','Admin User');

$activityId = $I->IdEmarkingActivity('Test Course Sec.1 2015', 'tu papi');

$rubricId = $I->IdEmarkingRubric($activityId);

?>