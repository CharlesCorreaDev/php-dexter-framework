# Gera uma sequência determinística de bytes a partir de uma semente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.sodium-crypto-stream.php

---

# sodium\_crypto\_stream

(PHP 7 >= 7.2.0, PHP 8)

sodium\_crypto\_stream — Gera uma sequência determinística de bytes a partir de uma semente

### Descrição

function **sodium\_crypto\_stream**([int](language.types.integer.md) `$length`, [string](language.types.string.md) `$nonce`, #[[\SensitiveParameter](class.sensitiveparameter.md)] [string](language.types.string.md) `$key`): [string](language.types.string.md)

Gera uma sequência determinística de bytes a partir de uma semente, usando a cifra de fluxo XSalsa20.

### Parâmetros

`length`
:   O número de bytes a serem retornados.

`nonce`
:   Um número que deve ser usado apenas uma vez por mensagem. 24 bytes de comprimento.
    Este é um limite grande o suficiente para ser gerado aleatoriamente (por exemplo, [random\_bytes()](function.random-bytes.md)).

`key`
:   Chave de criptografia (256-bit).

### Valor Retornado

String de bytes pseudoaleatórios.

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
