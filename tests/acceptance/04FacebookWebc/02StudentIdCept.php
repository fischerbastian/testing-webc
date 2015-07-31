<?php

$I = new AcceptanceTester($scenario);

$I->login('alu1', 'pepito.P0', 'a l');

$I->click('Mi perfil');

$I->click('Ver perfil');

$I->grabFromCurrentUrl('/id=(\d+)/');

?>