# Security: Cryptography | The Definitive Guide to Yii 2.0 | Yii PHP Framework

> **Fonte / Source:** https://www.yiiframework.com/doc/guide/22.0/en/security-cryptography

---

0

# Cryptography [¶](#cryptography)

In this section we'll review the following security aspects:

- Generating random data
- Encryption and Decryption
- Confirming Data Integrity

## Generating Pseudorandom Data [¶](#generating-pseudorandom-data)

Pseudorandom data is useful in many situations. For example when resetting a password via email you need to generate a
token, save it to the database, and send it via email to end user which in turn will allow them to prove ownership of
that account. It is very important that this token be unique and hard to guess, else there is a possibility that attacker
can predict the token's value and reset the user's password.

Yii security helper makes generating pseudorandom data simple:

```
$key = Yii::$app->getSecurity()->generateRandomString();
```

## Encryption and Decryption [¶](#encryption-and-decryption)

Yii provides convenient helper functions that allow you to encrypt/decrypt data using a secret key. The data is passed through the encryption function so that only the person which has the secret key will be able to decrypt it.
For example, we need to store some information in our database but we need to make sure only the user who has the secret key can view it (even if the application database is compromised):

```
// $data and $secretKey are obtained from the form
$encryptedData = Yii::$app->getSecurity()->encryptByPassword($data, $secretKey);
// store $encryptedData to database
```

Subsequently when user wants to read the data:

```
// $secretKey is obtained from user input, $encryptedData is from the database
$data = Yii::$app->getSecurity()->decryptByPassword($encryptedData, $secretKey);
```

It's also possible to use key instead of password via [yii\base\Security::encryptByKey()](https://www.yiiframework.com/doc/api/22.0/yii-base-security#encryptByKey()-detail) and
[yii\base\Security::decryptByKey()](https://www.yiiframework.com/doc/api/22.0/yii-base-security#decryptByKey()-detail).

## Confirming Data Integrity [¶](#confirming-data-integrity)

There are situations in which you need to verify that your data hasn't been tampered with by a third party or even corrupted in some way. Yii provides an easy way to confirm data integrity in the form of two helper functions.

Prefix the data with a hash generated from the secret key and data

```
// $secretKey our application or user secret, $genuineData obtained from a reliable source
$data = Yii::$app->getSecurity()->hashData($genuineData, $secretKey);
```

Checks if the data integrity has been compromised

```
// $secretKey our application or user secret, $data obtained from an unreliable source
$data = Yii::$app->getSecurity()->validateData($data, $secretKey);
```

[Working with Passwords](guide_22_0__security-passwords.md)

[Go to Top](#top)

[Best Practices](guide_22_0__security-best-practices.md)

Found a typo, or you think this page needs improvement?  
[Edit it on GitHub](https://github.com/yiisoft/yii2/edit/master/docs/guide/security-cryptography.md) !
