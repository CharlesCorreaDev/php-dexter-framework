# Extrai a chave pública Ed25519 da chave secreta

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sodium-crypto-sign-publickey-from-secretkey.php

---

# sodium\_crypto\_sign\_publickey\_from\_secretkey

(PHP 7 >= 7.2.0, PHP 8)

sodium\_crypto\_sign\_publickey\_from\_secretkey — Extrai a chave pública Ed25519 da chave secreta

### Descrição

function **sodium\_crypto\_sign\_publickey\_from\_secretkey**(#[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$secret_key`): [string](language.types.string.md)

Extrai a chave pública Ed25519 da chave secreta.

### Parâmetros

`secret_key`
:   Chave secreta Ed25519

### Valor Retornado

Chave pública Ed25519

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
