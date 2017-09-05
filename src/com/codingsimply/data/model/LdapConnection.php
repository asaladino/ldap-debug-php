<?php

namespace com\codingsimply\data\model;

class LdapConnection
{
    public $user = 'username';
    public $password = 'password';
    public $host = ' ldaps://1.1.1.1';
    public $port = 636;

    /**
     * @var string location of the perm file.
     */
    public $certFile = '';

}