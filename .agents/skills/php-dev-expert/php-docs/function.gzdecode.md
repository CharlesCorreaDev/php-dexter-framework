# Decodifica uma string comprimida usando o gzip

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gzdecode.php

---

# gzdecode

(PHP 5 >= 5.4.0, PHP 7, PHP 8)

gzdecode — Decodifica uma string comprimida usando o gzip

### Descrição

function **gzdecode**([string](language.types.string.md) `$data`, [int](language.types.integer.md) `$max_length` = 0): [string](language.types.string.md)|[false](language.types.singleton.md)

Essa função retorna a versão decodifica de
`data`.

### Parâmetros

`data`
:   Os dados a serem decodificados, encodificados por [gzencode()](function.gzencode.md).

`max_length`
:   Tamanho máximo dos dados a serem decodificados.

### Valor Retornado

A string decodificada, ou ou **`false`** em caso de falha.

### Erros/Exceções

Em caso de problemas, uma mensagem **`E_WARNING`** é emitida.

### Veja também

- [gzencode()](function.gzencode.md) - Cria uma string comprimida no formato gzip

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
