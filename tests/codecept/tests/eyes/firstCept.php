<?php
$I = new EyesTester($scenario);
$I->wantTo('check that the frontpage is OK');
$I->amOnPage('/');
$I->eyeball('the frontpage');
