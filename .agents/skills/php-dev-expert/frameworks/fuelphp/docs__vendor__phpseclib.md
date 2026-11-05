# Vendor additions - PHPSecLib - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/vendor/phpseclib.html

---

## PHPSecLib

### Introduction

The PHP Secure Communications Library contains LGPL-licensed pure-PHP implementations of arbitrary-precision integers,
fully PKCS#1 (v2.1) compliant RSA, DES, 3DES, RC4, Rijndael, AES, SSH-1, SSH-2, and SFTP. This book discusses how to use them.

### Documentation

You can find the original PHPSecLib documentation [here](http://phpseclib.sourceforge.net/documentation/).

### FuelPHP Usage

The PHPSecLib vendor package is used by FuelPHP in the Crypt class, to generate secure hashes, and in the Auth package, which uses PBKDF2.

### Application Usage

For use in your application the PHPSecLib package has been converted to a namespaced, autoloader friendly library.
You can use it directly from your application.

```
<?php
/**
 * Example controller that does an SSH login
 */

class Controller_Ssh extends Controller
{
	public function action_index()
	{
		// connect to my server
		$ssh = new \phpseclib\Net\SSH2('myserver.example.org');

		// login
		if ( ! $ssh->login('username', 'password'))
		{
			throw new \Exception('ssh login failed');
		}

		// return the view that formats the directory list
		return View::forge('ssh/dirinfo', array(
			'pwd' => $ssh->exec('pwd'),
			'info' => $ssh->exec('ls -la'),
		));
	}
}
```
