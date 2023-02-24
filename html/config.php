<?php
unset($CFG);  // Ignore this line
global $CFG;  // This is necessary here for PHPUnit execution
$CFG = new stdClass();


$CFG->dbtype    = 'mariadb';      // 'pgsql', 'mariadb', 'mysqli', 'auroramysql', 'sqlsrv' or 'oci'
$CFG->dblibrary = 'native';     // 'native' only at the moment
$CFG->dbhost    = 'localhost';  // eg 'localhost' or 'db.isp.com' or IP
$CFG->dbname    = 'moodledb';     // database name, eg moodle
$CFG->dbuser    = 'moodleuser';   // your database username
$CFG->dbpass    = '223AzTanTest';   // your database password
$CFG->prefix    = 'mdl_';       // prefix to use for all table names
$CFG->dboptions = array(
    'dbpersist' => false,
    'dbsocket'  => false,
    'dbport'    => '',
    'dbhandlesoptions' => false,
    'dbcollation' => 'utf8mb4_unicode_ci',
);


$CFG->wwwroot   = 'https://subdomain.literacysolutions.com';

$CFG->dataroot  = '/var/www/moodledata';

$CFG->directorypermissions = 02777;

$CFG->admin = 'admin';

require_once(__DIR__ . '/lib/setup.php'); // Do not edit
