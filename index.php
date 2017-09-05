<?php

use com\codingsimply\data\model\LdapConnection;
use com\codingsimply\utility\LdapDebugger;

spl_autoload_register( function ($className ) {
    $file = __DIR__ . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . $className . '.php';
    $file = str_replace( '\\', DIRECTORY_SEPARATOR, $file );
    if ( file_exists( $file ) ) {
        /** @noinspection PhpIncludeInspection */
        require_once $file;
    }
} );


$ldapConnection = new LdapConnection();
$ldapDebugger = LdapDebugger::build($ldapConnection);