# Extrai a chave secreta Ed25519 de um par de chaves

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sodium-crypto-sign-secretkey.php

---

# sodium\_crypto\_sign\_secretkey

(PHP 7 >= 7.2.0, PHP 8)

sodium\_crypto\_sign\_secretkey — Extrai a chave secreta Ed25519 de um par de chaves

### Descrição

function **sodium\_crypto\_sign\_secretkey**(#[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$key_pair`): [string](language.types.string.md)

Extrai a chave secreta Ed25519 de um par de chaves.

### Parâmetros

`key_pair`
:   Par de chaves Ed25519 (veja: [sodium\_crypto\_sign\_keypair()](function.sodium-crypto-sign-keypair.md))

### Valor Retornado

Chave secreta Ed25519

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
