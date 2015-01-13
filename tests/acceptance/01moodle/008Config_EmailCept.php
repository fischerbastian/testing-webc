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


// Email Activation
$I->amOnPage('/admin/settings.php?section=messagesettingemail');
$I->see('Email');
$I->fillField('s__smtphosts','mx1.uai.cl');
$I->click('Guardar cambios');
?>
