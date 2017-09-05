# LDAP Debug PHP

Helps with debugging php ldap issues.

## Usage
```php
use com\codingsimply\data\model\LdapConnection;
use com\codingsimply\utility\LdapDebugger;

$ldapConnection = new LdapConnection();
$ldapConnection->user = 'username';
$ldapConnection->password = 'password';
$ldapConnection->host = ' ldaps://1.1.1.1';
$ldapConnection->port = 636;

$ldapDebugger = LdapDebugger::build($ldapConnection);
$ldapDebugger->test();
```

Then run from the commandline.