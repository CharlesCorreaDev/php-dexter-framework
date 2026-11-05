# Upgrade Encryption — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/installation/upgrade_encryption.html

---

# Upgrade Encryption[](#upgrade-encryption "Link to this heading")

## [Documentations](#id1)[](#documentations "Link to this heading")

- [Encryption Library Documentation CodeIgniter 3.x](https://codeigniter.com/userguide3/libraries/encryption.html)
- [Encryption Service Documentation CodeIgniter 4.x](libraries__encryption.md)

## [What has been changed](#id2)[](#what-has-been-changed "Link to this heading")

- The support for `MCrypt` has been dropped, as that has been deprecated as of PHP 7.2.

## [Upgrade Guide](#id3)[](#upgrade-guide "Link to this heading")

1. Within your configs the `$config['encryption_key'] = 'abc123';` moved from **application/config/config.php** to `public $key = 'abc123';` in **app/Config/Encryption.php**.
2. If you need to decrypt data encrypted with CI3’s Encryption, configure settings to maintain compatibility. See [Configuration to Maintain Compatibility with CI3](libraries__encryption.md#encryption-compatible-with-ci3).
3. Wherever you have used the encryption library you have to replace `$this->load->library('encryption');` with `$encrypter = service('encrypter');` and change the methods for encryption and decrypting like in the following code example.

## [Code Example](#id4)[](#code-example "Link to this heading")

### [CodeIgniter Version 3.x](#id5)[](#codeigniter-version-3-x "Link to this heading")

```
<?php

$this->load->library('encryption');

$plain_text = 'This is a plain-text message!';
$ciphertext = $this->encryption->encrypt($plain_text);

// Outputs: This is a plain-text message!
echo $this->encryption->decrypt($ciphertext);
```

### [CodeIgniter Version 4.x](#id6)[](#codeigniter-version-4-x "Link to this heading")

```
<?php

$encrypter = service('encrypter');

$plainText  = 'This is a plain-text message!';
$ciphertext = $encrypter->encrypt($plainText);

// Outputs: This is a plain-text message!
echo $encrypter->decrypt($ciphertext);
```
