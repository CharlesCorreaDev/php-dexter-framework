# Retorna o tipo de codificação para a compressão de saída

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.zlib-get-coding-type.php

---

# zlib\_get\_coding\_type

(PHP 4 >= 4.3.2, PHP 5, PHP 7, PHP 8)

zlib\_get\_coding\_type — Retorna o tipo de codificação para a compressão de saída

### Descrição

function **zlib\_get\_coding\_type**(): [string](language.types.string.md)|[false](language.types.singleton.md)

Retorna o tipo de codificação para a compressão de saída.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Possíveis valores de retorno são `gzip`, `deflate`,
ou **`false`**.

### Veja também

- A diretiva [zlib.output\_compression](zlib.configuration.md#ini.zlib.output-compression)

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
