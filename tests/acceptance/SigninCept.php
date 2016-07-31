<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('login to website with correct credentials');
$I->amOnPage('/login');
$I->fillField('login','admin');
$I->fillField('password','admin');
$I->click(['id' => 'sign-in']);
$I->canSee('Profile info');
