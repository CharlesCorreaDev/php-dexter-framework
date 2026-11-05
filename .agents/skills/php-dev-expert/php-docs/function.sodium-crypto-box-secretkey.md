# Extrai a chave secreta de um par de chaves crypto_box

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sodium-crypto-box-secretkey.php

---

# sodium\_crypto\_box\_secretkey

(PHP 7 >= 7.2.0, PHP 8)

sodium\_crypto\_box\_secretkey — Extrai a chave secreta de um par de chaves crypto\_box

### Descrição

function **sodium\_crypto\_box\_secretkey**(#[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$key_pair`): [string](language.types.string.md)

Dado um par de chaves, busca apenas a chave secreta.

### Parâmetros

`key_pair`
:   Um par de chaves, como o gerado por [sodium\_crypto\_box\_keypair()](function.sodium-crypto-box-keypair.md) ou
    [sodium\_crypto\_box\_seed\_keypair()](function.sodium-crypto-box-seed-keypair.md).

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
