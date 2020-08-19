<?php

declare(strict_types=1);

$cfg['blowfish_secret'] = '!@#$%^&*()_+=-0987654321bhjkzxcf';

$i = 0;

$i++;

$cfg['Servers'][$i]['auth_type'] = 'cookie';
$cfg['Servers'][$i]['host'] = 'localhost';
$cfg['Servers'][$i]['compress'] = false;
$cfg['Servers'][$i]['AllowNoPassword'] = true;
$cfg['Servers'][$i]['AllowRoot'] = false;

$cfg['UploadDir'] = '';
$cfg['SaveDir'] = '';
