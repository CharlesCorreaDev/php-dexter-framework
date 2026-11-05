# Converte uma chave secreta Ed25519 em uma chave secreta Curve25519

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sodium-crypto-sign-ed25519-sk-to-curve25519.php

---

# sodium\_crypto\_sign\_ed25519\_sk\_to\_curve25519

(PHP 7 >= 7.2.0, PHP 8)

sodium\_crypto\_sign\_ed25519\_sk\_to\_curve25519 — Converte uma chave secreta Ed25519 em uma chave secreta Curve25519

### Descrição

function **sodium\_crypto\_sign\_ed25519\_sk\_to\_curve25519**(#[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$secret_key`): [string](language.types.string.md)

Dada uma chave secreta Ed25519, calcula a chave secreta X25519 birracionalmente equivalente.

### Parâmetros

`secret_key`
:   Chave secreta adequada para as funções crypto\_sign.

### Valor Retornado

Chave secreta adequada para as funções crypto\_box.

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
