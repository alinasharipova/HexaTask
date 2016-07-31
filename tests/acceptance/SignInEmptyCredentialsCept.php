<?php
use \Codeception\Util\Locator;


$I = new AcceptanceTester($scenario);
$I->wantTo('login to website with empty credentials');
#$I->lookForwardTo('access all website features');
$I->amOnPage('/login');
$I->fillField('login','');
$I->fillField('password','');
$I->click(['id' => 'sign-in']);
$I->canSee('Please, enter your login');
$I->canSee('Please, enter your password');
