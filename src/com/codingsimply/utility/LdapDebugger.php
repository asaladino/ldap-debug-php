<?php

namespace com\codingsimply\utility;

use com\codingsimply\data\model\LdapConnection;

class LdapDebugger
{
    /**
     * @var LdapConnection
     */
    public $ldapConnection;

    /**
     * Helper builder function.
     *
     * @param LdapConnection $ldapConnection
     * @return LdapConnection the utility instance.
     */
    public static function build(LdapConnection $ldapConnection)
    {
        $ldapDebugger = new LdapDebugger();
        $ldapDebugger->ldapConnection = $ldapConnection;
        return $ldapConnection;
    }

    /**
     * Test the connection. Important part is setting global LDAP_OPT_DEBUG_LEVEL to 7.
     */
    public function test()
    {
        echo "Setting certificate...\n";
        // If you have it.
        putenv('LDAPTLS_CACERT=');

        // Important for dumping all info.
        ldap_set_option(null, LDAP_OPT_DEBUG_LEVEL, 7);

        echo "Setting up ldap connection...\n";
        $ad = ldap_connect($this->ldapConnection->host, $this->ldapConnection->port) or die('Could not connect to LDAP server.');
        ldap_set_option($ad, LDAP_OPT_PROTOCOL_VERSION, 3);

        echo "Started bind...\n";
        $bind = ldap_bind($ad, $this->ldapConnection->user, $this->ldapConnection->password) or die('Could not bind to AD.');

        echo "Got connection...\n";
    }

}