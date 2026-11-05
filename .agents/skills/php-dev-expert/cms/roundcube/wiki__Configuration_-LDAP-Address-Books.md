# Configuration: LDAP Address Books · roundcube/roundcubemail Wiki · GitHub

> **Fonte / Source:** https://github.com/roundcube/roundcubemail/wiki/Configuration:-LDAP-Address-Books

---

# LDAP Addressbook Server for Roundcube

This How-to describes the setup of a simple LDAP address book server with [OpenLDAP](http://www.openldap.org) that should be ready for use with Roundcube "out of the box". The goal is to have an address book solution similar to the SQL based one, including public and private books, contact groups and configurable fields. On the other side it should be possible to connect with any LDAP address book client out there.

This How-to makes some simplifications that are maybe a good choice for a small home server, but not what professionals would prefer:

- the LDAP server runs on the same host as Roundcube
- the static config file (`slapd.conf`) is used instead of the newer dynamic config directory
- security issues are not part of this How-to, nevertheless it is highly recommended to disallow connections from other hosts than needed
- this How-to is based and tested on *Debian Lenny* and *Ubuntu 10.10*, but other Distros (and OS?) should work as well
- contacts and groups are located in the same base directory, since RC can probably use the contact groups even when a (strange) LDAP server do not support it (?)

## Installing the LDAP Server

Install at least the following packages (they might be named differently depending on your distro?):

- `slapd`: the OpenLDAP server daemon
- `ldap-utils`: LDAP tools like ldapsearch and ldapadd
- `php5-ldap`: the PHP bindings later used by Roundcube

For example, on Debian based systems:

```
$ sudo apt-get install slapd ldap-utils php5-ldap
```

Depending on your distribution (e.g. on *Debian Lenny*), you will be asked during the installation about:

- domain name = *localhost*
- organisation = *LDAP Addressbook Server*
- administrator password = *mypasswd*

The proposed answers for the domain name (also called 'suffix') fit well with this How-to. If you want to use another, you have to know or find out how to adapt the following steps.
Please change the password to something secure.

For example, on Debian based systems, you can redo this preconfiguration:

```
$ sudo dpkg-reconfigure slapd
```

If you are not asked about the above, e.g. like on *Ubuntu 9.10* and later, you have to define everything in the configuration file (see below). If so, you have to generate an administrator password first:

```
$ sudo slappasswd
New password:
Re-enter new password:
{SSHA}bCiMXssO6JJ2ZsPikd1qjNuWhApr+fHr
```

Remember or copy the last line (the hashed password) for later use.

## Configuring the LDAP Server

OpenLDAP supports two types of configuration:

1. the static config file, usually `/etc/ldap/slapd.conf`
2. the newer dynamic config directory, usually `/etc/ldap/slapd.d/`

Some Distros, like *Debian Lenny*, still preconfigure the config file.
Others like *Ubuntu 9.10* and later are using the config directory instead, in this case you have to change this default behaviour first.

E.g. in *Ubuntu 10.10* you have to edit the file */etc/default/slapd* and change the first entry:

```
SLAPD_CONF=/etc/ldap/slapd.conf
SLAPD_USER="openldap"
SLAPD_GROUP="openldap"
```

Remember that the user and group of the slapd daemon is usually *openldap*. In some Distros the ldap config path can be different, e.g. in CentOS it is "/etc/openldap/slapd.conf".

Now you have to create/modify the config file `/etc/ldap/slapd.conf`:

- [slapd.conf](https://gist.github.com/rcubetrac/035af863abea7d89723225739a410e83#file-slapd-conf)
  This example config file should just work for the Roundcube LDAP address book server described here, but might not for other LDAP solutions. Some words about this example configuration:
- compared to the default `slapd.conf` file of OpenLDAP, all non-relevant comments are removed.
- the nis schema is removed because the simple address book do not need it.
- if you use the proposed config file, open it and replace the password (*rootpw*) with the hashed password from the slappasswd command used earlier.

After you created/modified it, set restrictive permissions for the config file. Since the password is stored inside, normal user must not be able to read it.
User and group must correspond with the ones you found above in */etc/default/slapd* or even with the ones your LDAP is running with.

```
$ sudo chmod 640 /etc/ldap/slapd.conf
$ sudo chown openldap.openldap /etc/ldap/slapd.conf
```

Restart the OpenLDAP server now. On Debian based systems type:

```
$ sudo invoke-rc.d slapd restart
```

If you do not find any errors here, your LDAP server is closer to becoming your LDAP address book server.

## Setup the LDAP Server

Once the OpenLDAP server is running, you can begin to set it up. First, check if you have access to it:

```
$ ldapsearch -xLLL -H ldap://localhost:389 -D cn=admin,dc=localhost -W -b dc=localhost
Enter LDAP Password:
No such object (32)
```

The password must correspond with the *rootpw* in the config file, the -D option corresponds with the *rootdn* and the -b with the *suffix*. If you get *No such object (32)*, this means that the LDAP directory is still empty, thus is ready to be filled now.

We now have to setup a directory structure that Roundcube can access. Download the following shell script, configure the first few lines, and execute it with admin privileges on the server (use sudo or even run it as root): [rcabook-setup.sh](https://gist.github.com/rcubetrac/035af863abea7d89723225739a410e83)

You should see this:

```
$ sudo bash rcabook-setup.sh
This script prepares an openLDAP server for a simple
addressbook, working "out of the box" with Roundcube:

  server: ldap://localhost:389
  org   : LDAP Addressbook Server
  config: /etc/ldap/slapd.conf
  suffix: dc=localhost
  rootdn: cn=admin,dc=localhost

-create the openLDAP base directory: dc=localhost
  (as LDAP administator: cn=admin,dc=localhost)
  Enter LDAP Password:
adding new entry "dc=localhost"

-create addressbook base directory: ou=rcabook,dc=localhost
  (as LDAP administator: cn=admin,dc=localhost)
  Enter LDAP Password:
adding new entry "ou=rcabook,dc=localhost"

-create the addressbook user: cn=rcuser,ou=rcabook,dc=localhost
  (as LDAP administator: cn=admin,dc=localhost)
  Enter LDAP Password:
adding new entry "cn=rcuser,ou=rcabook,dc=localhost"

-create subdirectory for public contacts: ou=public,ou=rcabook,dc=localhost
  (as Roundcube user: cn=rcuser,ou=rcabook,dc=localhost)
adding new entry "ou=public,ou=rcabook,dc=localhost"

-create subdirectory for private addressbooks: ou=private,ou=rcabook,dc=localhost
  (as Roundcube user: cn=rcuser,ou=rcabook,dc=localhost)
adding new entry "ou=private,ou=rcabook,dc=localhost"

The LDAP addressbook is ready now for using:
  base_dn: ou=rcabook,dc=localhost
  bind_dn: cn=rcuser,ou=rcabook,dc=localhost

Use the following command for reading and checking your setup:

  ldapsearch -xLLL -H ldap://localhost:389 -D cn=rcuser,ou=rcabook,dc=localhost -w rcpass -b ou=rcabook,dc=localhost
```

If you run the proposed ldap search query, you should get something like:

```
$ ldapsearch -xLLL -H ldap://localhost:389 -D cn=rcuser,ou=rcabook,dc=localhost -w rcpass -b ou=rcabook,dc=localhost
dn: ou=rcabook,dc=localhost
ou: rcabook
objectClass: top
objectClass: organizationalUnit

dn: cn=rcuser,ou=rcabook,dc=localhost
cn: rcuser
userPassword:: e1NTSEF9L3NGVmQzTlFud1IvbXNYN0ZDUTV0cjBiUWIyK3RxY0g=
objectClass: organizationalRole
objectClass: simpleSecurityObject

dn: ou=public,ou=rcabook,dc=localhost
ou: public
objectClass: top
objectClass: organizationalUnit

dn: ou=private,ou=rcabook,dc=localhost
ou: private
objectClass: top
objectClass: organizationalUnit
```

If you see at least this 4 entries, your LDAP addressbook server is now ready to become filled with contacts.

## Configuring Roundcube

### Prerequisites

In order to enable Roundcube to connect to LDAP, make sure the `kolab/net_ldap3` dependency is installed. This is already included in the "complete" packages of Roundcube and otherwise needs to be added from the "suggest" to the "require" section of your [composer.json](https://github.com/roundcube/roundcubemail/blob/395bac5854b663796a81277c8cc997fc877f0d78/composer.json-dist#L28) file. Then run composer install to pull in the required modules.

### Configure LDAP directories

The following example configurations (only the important fields are shown!) fit public and private LDAP address books working with the described LDAP server setup:

```
$config['ldap_public']['public'] = array(
    'name'              => 'Public LDAP Addressbook',
    'hosts'             => array('localhost'),
    'port'              => 389,
    'user_specific'     => false,
    'base_dn'           => 'ou=public,ou=rcabook,dc=localhost',
    'bind_dn'           => 'cn=rcuser,ou=rcabook,dc=localhost',
    'bind_pass'         => 'rcpass',
    'filter'            => '(objectClass=inetOrgPerson)',
    'groups'            => array(
        'base_dn'         => '',     // in this Howto, the same base_dn as for the contacts is used
        'filter'          => '(objectClass=groupOfNames)',
        'object_classes'  => array("top", "groupOfNames"),
    ),
);

$config['ldap_public']['private'] = array(
    'name'            => 'Private LDAP Addressbook',
    'hosts'           => array('localhost'),
    'port'            => 389,
    'user_specific'   => true,
    'base_dn'         => 'cn=%u,ou=private,ou=rcabook,dc=localhost',
    'bind_dn'         => 'cn=%u,ou=private,ou=rcabook,dc=localhost',
    'bind_pass'       => '',   // the user login password is used
    'filter'          => '(objectClass=inetOrgPerson)',
    'groups'          => array(
        'base_dn'        => '',     // in this Howto, the same base_dn as for the contacts is used
        'filter'         => '(objectClass=groupOfNames)',
        'object_classes' => array("top", "groupOfNames"),
    ),
);
```

Note: the contact group features are included not before RC version 0.6
Note: the `%x` replacement for the `base_dn` does not work before RC version 0.6

## Clients other than Roundcube

Many addressbook clients can connect to a LDAP server. The most of them do not support contact groups yet, and the number of supported contact fields is often very limited.

Usually you have to set the following fields:

- the hostname, or even the IP address
- the ldap port: 389
- the bind\_dn: "cn=rcuser,ou=rcabook,dc=localhost"
- the bind\_pw: "rcpass"
- the base\_dn: "ou=public,ou=rcabook,dc=localhost"
- the filter: "(object\_class=inetOrgPerson)"

## Microsoft Active Directory as Roundcube Address book

To use Microsoft AD (Active Directory) as Roundcube's Address book, add the section `$config['ldap_public']`

seen below to your `config.inc.php`.

- MyAdLdap: This is an arbitrary name.
- Big Company, Inc: This is your addressbook name
- masterserver.company.net: Active Directory server
- CN=users,DC=company,DC=net: The Base DN for the users
- [ldap@company.net](mailto:ldap@company.net): Active Directory user, with Read-Only capabilities over the whole directory
- ADsecretpassword: [ldap@company.net](mailto:ldap@company.net) 's Active Directory Password

```
$config['ldap_public'] = array(
    'MyAdLdap' => array (
        'name' => 'Big Company, Inc',
        'hosts' => array('masterserver.company.net'),
        'sizelimit' => 6000,
        'port' => 3268, # See comments below
        'use_tls' => false,
        'user_specific' => false,
        'base_dn' => 'CN=users,DC=company,DC=net',
        'bind_dn' => 'ldap@company.net',
        'bind_pass' => 'ADsecretpassword',
        'writable' => false,
        'ldap_version' => 3,
        'search_fields' => array(
           'mail',
           'cn',
        ),
        'fieldmap' => array(
            'name' => 'cn',
            'email' => 'mail',
            'surname' => 'sn',
            'firstname' => 'givenName',
        ),
        'sort' => 'sn',
        'scope' => 'list', # or 'sub'
        'filter' => '(&(mail=*)(|(&(objectClass=user)(!(objectClass=computer)))(objectClass=group)))',
        'global_search' => true,
        'fuzzy_search' => true,
        'vlv' => false,
    ),
);
```

## Important

When connecting to AD, you may need to use port 3268. Then again, not all LDAP fields are available in port 3268. When connecting via LDAPS, use `ldaps://masterserver.company.net` as a host, `636` as a port and `use_tls` set to `false`. Use whatever works. <http://technet.microsoft.com/en-us/library/cc978012.aspx>
