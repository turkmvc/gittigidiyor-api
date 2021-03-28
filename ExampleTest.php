<?php

include "GittiGidiyor.php";

use turkmvc\GittiGidiyor\GittiGidiyor;

$conf                   = [];
$conf['apikey'] 		    = '****';
$conf['secret_key']     = '****';
$conf['auth_user'] 	    = '****';
$conf['nick'] 			    = '****';
$conf['password'] 	    = '****';
$conf['auth_password'] 	= '****';
$conf['lang'] 			    = 'tr';

$gg = new GittiGidiyor($conf);

$gg->registerDeveloper('test', 'test');
