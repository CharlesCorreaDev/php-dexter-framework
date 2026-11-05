# Autenticação de dois fatores — documentação phpMyAdmin 6.0.0-dev

> **Fonte / Source:** https://docs.phpmyadmin.net/pt-br/latest/two_factor.html

---

# Autenticação de dois fatores[¶](#two-factor-authentication "Link permanente para este título")

Novo na versão 4.8.0.

Desde o phpMyAdmin 4.8.0, você pode configurar para que a autenticação de dois fatores seja usada ao iniciar a sessão. Para isso, primeiro você precisa configurar as [Armazenamento de configurações do phpMyAdmin](setup.md#linked-tables). Assim que isso for feito, cada usuário poderá optar pelo segundo fator de autenticação nas Settings.

Ao executar o phpMyAdmin a partir do repositório de fontes do Git, as dependências devem ser instaladas manualmente; A maneira típica de fazê-lo é com o comando:

```
composer require pragmarx/google2fa-qrcode bacon/bacon-qr-code
```

Ou ao usar uma chave de segurança física com FIDO U2F:

```
composer require code-lts/u2f-php-server
```

## Aplicativo de Autenticação (2FA)[¶](#authentication-application-2fa "Link permanente para este título")

Usar um aplicativo para autenticação é uma abordagem bastante comum baseada em HOTP e [TOTP](https://en.wikipedia.org/wiki/Time-based_One-time_Password_Algorithm). Ele é baseado na transmissão de uma chave privada do phpMyAdmin para o aplicativo de autenticação e o aplicativo pode gerar um código único com base nessa chave. A maneira mais fácil de inserir a chave no aplicativo do phpMyAdmin é por meio da digitalização de um código QR.

Há dezenas de aplicativos disponíveis para celulares para implementar esses padrões, os mais utilizados incluem:

- [FreeOTP para iOS, Android e Pebble](https://freeotp.github.io/)
- [Authy para iOS, Android, Chrome e OS X](https://authy.com/)
- [Google Authenticator para iOS](https://apps.apple.com/us/app/google-authenticator/id388497605)
- [Google Authenticator para Android](https://play.google.com/store/apps/details?id=com.google.android.apps.authenticator2)
- [LastPass Authenticator para iOS, Android, OS X e Windows](https://lastpass.com/auth/)

## Chave de Segurança de Hardware (FIDO U2F)[¶](#hardware-security-key-fido-u2f "Link permanente para este título")

Usar tokens de hardware é considerado mais seguro do que uma solução baseada em software. O phpMyAdmin suporta tokens [FIDO U2F](https://en.wikipedia.org/wiki/Universal_2nd_Factor).

Existem vários fabricantes desses tokens, por exemplo:

- [youbico FIDO U2F Security Key](https://www.yubico.com/fido-u2f/)
- [HyperFIDO](https://www.hypersecu.com/hyperfido)
- [Trezor Hardware Wallet](https://trezor.io/?offer_id=12&aff_id=1592&source=phpmyadmin) can act as an [U2F token](https://trezor.io/learn/a/what-is-u2f)
- [List of Two Factor Auth (2FA) Dongles](https://www.dongleauth.com/dongles/)

## Autenticação de dois fatores simples[¶](#simple-two-factor-authentication "Link permanente para este título")

Esta autenticação está incluída apenas para fins de teste e demonstração, pois ela não fornece de fato uma autenticação de dois fatores, apenas pede ao usuário para confirmar o login clicando no botão.

Ela não deve ser usada em produção e fica desativada, a menos que o [`$cfg['DBG']['simple2fa']`](config.md#cfg_DBG_simple2fa) seja habilitado.
