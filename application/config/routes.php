<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'web';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['bb-admin/login'] = 'Admin/auth/login';
$route['bb-admin'] = 'Admin/dashboard';
/*posts*/
$route['bb-admin/posts'] = 'Admin/posts';
$route['bb-admin/posts/filter/(:any)'] = 'Admin/posts/filterBy/$1';
/*guru*/
$route['bb-admin/guru'] = 'Admin/guru';
$route['bb-admin/guru/(:any)'] = 'Admin/guru/$1';
/*siswa*/
$route['bb-admin/siswa'] = 'Admin/siswa';
$route['bb-admin/siswa/(:any)'] = 'Admin/siswa/$1';
/*komentar*/
$route['bb-admin/komentar/filter/(:any)'] = 'Admin/komentar/filterBy/$1';
$route['bb-admin/komentar'] = 'Admin/komentar';
/*statistik*/
$route['bb-admin/statistik'] = 'Admin/statistik';
$route['bb-admin/statistik/by/(:any)'] = 'Admin/statistik/$1';



/*
 * Ajax Request
 */
$route['bb-admin/ajax/do/login']['POST'] = "Admin/Ajax/login";
$route['bb-admin/ajax/do/logout']['POST'] = "Admin/Ajax/logout";
