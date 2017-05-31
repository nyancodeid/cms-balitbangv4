<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * Basic Information About Website
 */

$config['sekolah']['name'] = "SMK Negeri 3 Jombang";
$config['sekolah']['alamat'] = "Jl. Patimura No.6, Jombang";
$config['sekolah']['phone'] = "+62111222333";
$config['sekolah']['tingkat'] = "smk";

$config['website']['link'] = "https://smkn3-jbg.sch.id";
$config['website']['webmaster'] = ["admin@smkn3-jbg.sch.id", "webmaster@smkn3-jbg.sch.id"];

$config['apperance']['theme'] = "default";

/*
 * Exports Config
 */
$this->config['balitbang.config'] = $config;