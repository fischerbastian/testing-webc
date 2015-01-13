<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('Log in as an admin');
$I->amOnPage('/?lang=es');
$I->click('Entrar', 'div.logininfo');
$I->fillField('username', 'admin');
$I->fillField('password', 'pepito.P0');
$I->click('loginbtn');
$I->see('Usted se ha identificado como ');
$I->seeLink('Admin Usuario');


// Debuggin Activation

$I->amOnPage('/admin/settings.php?section=local_uai');
$I->see('UAI');
$I->checkoption('#id_s__local_uai_debug');
$I->click('Guardar cambios');
?>