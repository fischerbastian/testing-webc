<?php

$I = new AcceptanceTester($scenario);

$I->login('alumno3', 'pepito.P0', 'ALUMNO 3');

$I->amOnPage('/user/profile.php?id=188');

$I->see('chat');
$courses = $I->grabMultiple('list');

?>