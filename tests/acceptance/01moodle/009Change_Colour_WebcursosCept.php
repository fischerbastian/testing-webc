<?php

use Codeception\Module\UserController;

$I = new AcceptanceTester($scenario);
$U = new UserController($I);

$I->wantTo('Change Colour Theme');
$U->login('admin', 'pepito.P0', 'Admin Usuario');

// Change Colour
$I->amOnPage('/admin/settings.php?section=theme_essential_color&lang=es');
$I->fillField('s_theme_essential_themecolor','#000000');
$I->fillField('s_theme_essential_themehovercolor','#555555');
$I->fillField('s_theme_essential_footerurlcolor','#FFB400');
$I->checkOption('#id_s_theme_essential_enablealternativethemecolors1');
$I->fillField('s_theme_essential_alternativethemename1','Azul Oscuro WebC');
$I->fillField('s_theme_essential_alternativethemecolor1','#023E73');
$I->fillField('s_theme_essential_alternativethemehovercolor1','#0369AF');
$I->checkOption('#id_s_theme_essential_enablealternativethemecolors2');
$I->fillField('s_theme_essential_alternativethemename2','Violeta WebC');
$I->fillField('s_theme_essential_alternativethemecolor2','#BC007D');
$I->fillField('s_theme_essential_alternativethemehovercolor2','#89005E');
$I->fillField('s_theme_essential_alternativethemehovercolor1','#0369AF');
$I->checkOption('#id_s_theme_essential_enablealternativethemecolors3');
$I->fillField('s_theme_essential_alternativethemename3','Grafito WebC');
$I->fillField('s_theme_essential_alternativethemecolor3','#747474');
$I->fillField('s_theme_essential_alternativethemehovercolor3','#555555');
$I->click('Guardar cambios');
?>