<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('Check translation on Russian');
$I->amOnPage('/login');
$I->click(['xpath'=>"//*[@id='content']/div[1]/span[2]/a[3]/img"]);
$I->canSee('Логин');