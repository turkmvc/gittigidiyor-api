<?php

include "GittiGidiyor.php";

use turkmvc\GittiGidiyor\GittiGidiyor;

$conf 					= [];
$conf['apikey'] 		= 'r34cj86AddHYsAN7ydhvRCJFe8RjsQ5N';
$conf['secret_key'] 	= '2W7SyfjxFPjCzupA';
$conf['auth_user'] 		= '****';
$conf['nick'] 			= '';
$conf['password'] 		= '';
$conf['auth_password'] 	= '****';
$conf['lang'] 			= 'tr';

$gg = new GittiGidiyor($conf);

$gg->registerDeveloper('test', 'test');
