# Build from source · roundcube/roundcubemail Wiki · GitHub

> **Fonte / Source:** https://github.com/roundcube/roundcubemail/wiki/Build-from-source

---

# Build Roundcube from Source

For detailed instructions please read the [Makefile](https://github.com/roundcube/roundcubemail/blob/master/Makefile)
included with Roundcube. This page provides a quick guide only.

Building Roundcube from source is pretty similar to [Dev Releases](wiki__Dev-Releases.md).

#### 1. Fetch the source from GitHub

```
git clone git://github.com/roundcube/roundcubemail.git roundcubemail-git
```

#### 2. Switch to the according branch

```
cd roundcubemail-git
git checkout tags/<Roundcube version>
```

e.g. `git checkout tags/1.6.15`

#### 3. Install JavaScript dependencies

```
bin/install-jsdeps.sh
```

#### 4. Compress Javascript files and add cache-buster tokens to images referenced from CSS styles

```
bin/jsshrink.sh
bin/updatecss.sh
```

#### 5. Optionally compress CSS files as well

```
bin/cssshrink.sh
```

#### 6. Remove development stuff, installer and git files

```
rm bin/transifexpull.sh bin/importgettext.sh bin/exportgettext.sh
rm -rf tests/ installer/ .git* .tx*
```

*For 1.6 and below only*

```
rm README.md INSTALL UPGRADING LICENSE CHANGELOG
```

#### 7. Download and configure [Composer](https://getcomposer.org)

```
curl -sS https://getcomposer.org/installer | php -- --install-dir=/tmp/
cp composer.json-dist composer.json
```

#### 8. Optionally, add dependencies for LDAP modules in order to enable LDAP address books in Roundcube

```
php /tmp/composer.phar require kolab/net_ldap3:dev-master --no-update
```

#### 9. Install PHP dependencies using Composer

```
php /tmp/composer.phar install --prefer-dist --no-dev
```

The `roundcubemail-git` directory now contains a complete Roundcube installation ready for deployment or packaging.
