<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('login to website with incorrect credentials');
$I->amOnPage('/login');
$I->fillField('login','123');
$I->fillField('password','123');
$I->click(['id' => 'sign-in']);
$I->canSee('Invalid credentials'); 

