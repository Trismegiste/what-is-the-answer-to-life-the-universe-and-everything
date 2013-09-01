<?php
$I = new TestGuy($scenario);
$I->wantTo('see 42');
$I->amGoingTo('/');
$I->expect('42');
