# Expande a chave e o nonce em um fluxo de chaves de bytes pseudoaleatórios

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sodium-crypto-stream-xchacha20.php

---

# sodium\_crypto\_stream\_xchacha20

(PHP 8 >= 8.1.0)

sodium\_crypto\_stream\_xchacha20 — Expande a chave e o nonce em um fluxo de chaves de bytes pseudoaleatórios

### Descrição

function **sodium\_crypto\_stream\_xchacha20**([int](language.types.integer.md) `$length`, [string](language.types.string.md) `$nonce`, #[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$key`): [string](language.types.string.md)

Expande `key` e `nonce` em um fluxo de chaves de bytes pseudoaleatórios.

### Parâmetros

`length`
:   Número de bytes desejado.

`nonce`
:   Nonce de 24 bytes.

`key`
:   Chave, possivelmente gerada de [sodium\_crypto\_stream\_xchacha20\_keygen()](function.sodium-crypto-stream-xchacha20-keygen.md).

### Valor Retornado

Retorna um fluxo pseudoaleatório que pode ser usado com [sodium\_crypto\_stream\_xchacha20\_xor()](function.sodium-crypto-stream-xchacha20-xor.md).

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
