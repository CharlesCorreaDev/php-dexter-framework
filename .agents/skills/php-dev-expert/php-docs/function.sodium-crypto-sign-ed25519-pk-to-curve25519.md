# Converte uma chave pública Ed25519 em uma chave pública Curve25519

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sodium-crypto-sign-ed25519-pk-to-curve25519.php

---

# sodium\_crypto\_sign\_ed25519\_pk\_to\_curve25519

(PHP 7 >= 7.2.0, PHP 8)

sodium\_crypto\_sign\_ed25519\_pk\_to\_curve25519 — Converte uma chave pública Ed25519 em uma chave pública Curve25519

### Descrição

function **sodium\_crypto\_sign\_ed25519\_pk\_to\_curve25519**([string](language.types.string.md) `$public_key`): [string](language.types.string.md)

Dada uma chave pública Ed25519, calcula a chave pública X25519 birracionalmente equivalente.

### Parâmetros

`public_key`
:   Chave pública adequada para as funções crypto\_sign.

### Valor Retornado

Chave pública adequada para as funções crypto\_box.

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
