# Extrai a chave secreta de um par de chaves crypto_kx

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sodium-crypto-kx-secretkey.php

---

# sodium\_crypto\_kx\_secretkey

(PHP 7 >= 7.2.0, PHP 8)

sodium\_crypto\_kx\_secretkey — Extrai a chave secreta de um par de chaves crypto\_kx

### Descrição

function **sodium\_crypto\_kx\_secretkey**(#[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$key_pair`): [string](language.types.string.md)

Extrai a chave secreta de um par de chaves crypto\_kx.

### Parâmetros

`key_pair`
:   Par de chaves X25519, como o gerado por
    [sodium\_crypto\_kx\_keypair()](function.sodium-crypto-kx-keypair.md).

### Valor Retornado

Chave secreta X25519.

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
