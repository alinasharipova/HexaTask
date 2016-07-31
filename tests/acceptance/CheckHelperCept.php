<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('Check that we can go to the register page');
$I->amOnPage('/login');
$I->click(['xpath'=>"//*[@id='content']/div[2]/form/fieldset/div[1]/div[2]/img"]);
$I->canSee('Enter your login name if you want');
