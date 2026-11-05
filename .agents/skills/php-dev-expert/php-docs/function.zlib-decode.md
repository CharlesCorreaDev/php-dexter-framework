# Descomprime qualquer dado codificado em raw/gzip/zlib

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.zlib-decode.php

---

# zlib\_decode

(PHP 5 >= 5.4.0, PHP 7, PHP 8)

zlib\_decode — Descomprime qualquer dado codificado em raw/gzip/zlib

### Descrição

function **zlib\_decode**([string](language.types.string.md) `$data`, [int](language.types.integer.md) `$max_length` = 0): [string](language.types.string.md)|[false](language.types.singleton.md)

Descomprime qualquer dado codificado em raw/gzip/zlib.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`data`

`max_length`

### Valor Retornado

Retorna os dados descomprimidos, ou **`false`** em caso de falha.

### Veja também

- [zlib\_encode()](function.zlib-encode.md) - Comprime dados com o codificador especificado

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
