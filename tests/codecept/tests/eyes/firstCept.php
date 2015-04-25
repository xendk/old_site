<?php
$I = new EyesTester($scenario);
$I->wantTo('check that the frontpage is OK');
$I->amOnPage('/');
$I->eyeball('frontpage');
$I->see('Bandaid');

$I->amOnPage('/en/2014/04/28/point-bandaid');
$I->eyeball('bandaid');

$I->amOnPage('/en/2011/10/26/overriding-drush-make');
$I->eyeball('drush-make');
