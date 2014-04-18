<?php
/**
 * GaiaEHR (Electronic Health Records)
 * Copyright (C) 2013 Certun, LLC.
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

//$_SESSION['site'] = array();
//$_SESSION['site']['db']['type'] = 'mysql';
//$_SESSION['site']['db']['host'] = '#host#';
//$_SESSION['site']['db']['port'] = '#port#';
//$_SESSION['site']['db']['username'] = '#user#';
//$_SESSION['site']['db']['password'] = '#pass#';
//$_SESSION['site']['db']['database'] = '#db#';

if(!defined('site_db_type')) define('site_db_type', 'mysql');
if(!defined('site_db_host')) define('site_db_host', '#host#');
if(!defined('site_db_port')) define('site_db_port', '#port#');
if(!defined('site_db_password')) define('site_db_password', '#pass#');
if(!defined('site_db_database')) define('site_db_database', '#db#');
/**
 * AES Key
 * 256bit - key
 */
$_SESSION['site']['AESkey'] = '#key#';
if(!defined('site_aes_key')) define('site_aes_key', '#key#');
/**
 * HL7 server values
 */
$_SESSION['site']['hl7']['port'] = '#hl7Port#';
if(!defined('site_hl7_ports')) define('site_hl7_ports', '#hl7Port#');
/**
 * Default site language and theme
 * Check if the localization variable already has a value, if not pass the 
 * default language.
 */
$_SESSION['site']['name'] = '#sitename#';
$_SESSION['site']['default_localization']  = '#lang#';
$_SESSION['site']['theme'] = '#theme#';
$_SESSION['site']['timezone'] = '#timezone#';

if(!defined('site_name')) define('site_name', '#sitename#');
if(!defined('site_theme')) define('site_theme', '#theme#');
if(!defined('site_timezone')) define('site_timezone', '#timezone#');
if(!defined('site_default_localization')) define('site_default_localization', '#lang#');

$_SESSION['site']['id']    = basename(dirname(__FILE__));
$_SESSION['site']['dir']   = $_SESSION['site']['id'];
$_SESSION['site']['url']   = $_SESSION['url'] . 'sites/' . $_SESSION['site']['dir'];
$_SESSION['site']['path']  = str_replace('\\', '/', dirname(__FILE__));
$_SESSION['site']['temp']['url']  = $_SESSION['site']['url'] . '/temp';
$_SESSION['site']['temp']['path'] = $_SESSION['site']['path'] . '/temp';

if(!defined('site_id')) define('site_id', basename(dirname(__FILE__)));
if(!defined('site_dir')) define('site_dir', site_id);
if(!defined('site_url')) define('site_url', $_SESSION['url'].'sites/'.site_id);
if(!defined('site_path')) define('site_path', str_replace('\\', '/', dirname(__FILE__)));
if(!defined('site_temp_url')) define('site_temp_url', site_url .'/temp');
if(!defined('site_temp_path')) define('site_temp_path', site_url . '/temp');