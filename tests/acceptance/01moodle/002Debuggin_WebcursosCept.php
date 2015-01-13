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
$I->amOnPage('/?lang=es');
$I->see('Administración del sitio');
$I->click('Administración del sitio');
$I->click('Extensiones');
$I->click('Extensiones locales');
$I->click('UAI');
$I->amOnPage('/admin/settings.php?section=local_uai');
$I->see('UAI');
$I->checkoption('s__local_uai_debug');
$I->click('Guardar cambios');
?>