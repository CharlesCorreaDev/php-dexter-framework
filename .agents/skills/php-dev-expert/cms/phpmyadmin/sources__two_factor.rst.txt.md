# /pt-br/latest/_sources/two_factor.rst.txt

> **Fonte / Source:** https://docs.phpmyadmin.net/pt-br/latest/_sources/two_factor.rst.txt

---

.. \_2fa:
Two-factor authentication
=========================
.. versionadded:: 4.8.0
Since phpMyAdmin 4.8.0 you can configure two-factor authentication to be
used when logging in. To use this, you first need to configure the
:ref:`linked-tables`. Once this is done, every user can opt-in for the second
authentication factor in the :guilabel:`Settings`.
When running phpMyAdmin from the Git source repository, the dependencies must be installed
manually; the typical way of doing so is with the command:
.. code-block:: sh
composer require pragmarx/google2fa-qrcode bacon/bacon-qr-code
Or when using a hardware security key with FIDO U2F:
.. code-block:: sh
composer require code-lts/u2f-php-server
Authentication Application (2FA)
--------------------------------
Using an application for authentication is a quite common approach based on HOTP and
`TOTP `\_.
It is based on transmitting a private key from phpMyAdmin to the authentication
application and the application is then able to generate one time codes based
on this key. The easiest way to enter the key in to the application from phpMyAdmin is
through scanning a QR code.
There are dozens of applications available for mobile phones to implement these
standards, the most widely used include:
\* `FreeOTP for iOS, Android and Pebble `\_
\* `Authy for iOS, Android, Chrome, OS X `\_
\* `Google Authenticator for iOS `\_
\* `Google Authenticator for Android `\_
\* `LastPass Authenticator for iOS, Android, OS X, Windows `\_
Hardware Security Key (FIDO U2F)
--------------------------------
Using hardware tokens is considered to be more secure than a software based
solution. phpMyAdmin supports `FIDO U2F `\_
tokens.
There are several manufacturers of these tokens, for example:
\* `youbico FIDO U2F Security Key `\_
\* `HyperFIDO `\_
\* `Trezor Hardware Wallet `\_ can act as an `U2F token `\_
\* `List of Two Factor Auth (2FA) Dongles `\_
.. \_simple2fa:
Simple two-factor authentication
--------------------------------
This authentication is included for testing and demonstration purposes only as
it really does not provide two-factor authentication, it just asks the user to confirm login by
clicking on the button.
It should not be used in the production and is disabled unless
:config:option:`$cfg['DBG']['simple2fa']` is set.
