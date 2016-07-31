<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('Check that we can go to the register page');
$I->amOnPage('/login');
$I->click(['class' => 'register_href']);
$I->canSee('Register');
