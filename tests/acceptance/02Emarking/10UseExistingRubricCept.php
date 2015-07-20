<?php

$I = new AcceptanceTester($scenario);

$I->wantTo('Fill a rubric with an existing rubric');

$I->login('admin','pepito.P0','Admin User');

$activityId = $I->IdEmarkingActivity('Test Course Sec.1 2015', 'test2');

$rubricId = $I->IdEmarkingRubric($activityId);

$I->useExistingRubric('Test rubric', $rubricId);

?>