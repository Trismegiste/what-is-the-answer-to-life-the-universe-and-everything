<?php
$I = new WebGuy($scenario);
$I->wantTo('See 42 on homepage');
$I->amGoingTo('/index.php');
$I->see('42');
