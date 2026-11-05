# Une uma chave secreta e uma chave pública

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sodium-crypto-sign-keypair-from-secretkey-and-publickey.php

---

# sodium\_crypto\_sign\_keypair\_from\_secretkey\_and\_publickey

(PHP 7 >= 7.2.0, PHP 8)

sodium\_crypto\_sign\_keypair\_from\_secretkey\_and\_publickey — Une uma chave secreta e uma chave pública

### Descrição

function **sodium\_crypto\_sign\_keypair\_from\_secretkey\_and\_publickey**(#[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$secret_key`, [string](language.types.string.md) `$public_key`): [string](language.types.string.md)

Une uma chave secreta e uma chave pública.

### Parâmetros

`secret_key`
:   Chave secreta Ed25519

`public_key`
:   Chave pública Ed25519

### Valor Retornado

Par de chaves

`↑` and `↓` to navigate •
`Enter` to select •
`Esc` to close • `/` to open

document.addEventListener("DOMContentLoaded", function() {
/\*{{{Search Modal\*/
const language = 'local';
initSearchModal();
initPHPSearch(language).then((searchCallback) => {
initSearchUI({language, searchCallback, limit: 30});
});
/\*}}}\*/
});
