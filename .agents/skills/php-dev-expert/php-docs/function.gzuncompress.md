# Descomprime uma string comprimida

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gzuncompress.php

---

# gzuncompress

(PHP 4 >= 4.0.1, PHP 5, PHP 7, PHP 8)

gzuncompress — Descomprime uma string comprimida

### Descrição

function **gzuncompress**([string](language.types.string.md) `$data`, [int](language.types.integer.md) `$max_length` = 0): [string](language.types.string.md)|[false](language.types.singleton.md)

Esta função descomprime uma string comprimida.

### Parâmetros

`data`
:   Os dados comprimidos por [gzcompress()](function.gzcompress.md).

`max_length`
:   O comprimento máximo dos dados a serem decodificados.

### Valor Retornado

Os dados descomprimidos originais ou **`false`** em caso de erro.

A função retornará um erro se os dados descomprimidos forem mais do que
32768 vezes o comprimento dos dados comprimidos de entrada `data`
ou mais do que o parâmetro opcional `max_length`.

### Examples

**Exemplo #1 Exemplo de **gzuncompress()****

```
<?php
$compressed   = gzcompress('Me comprima', 9);
$uncompressed = gzuncompress($compressed);
echo $uncompressed;
?>
```

### Veja também

- [gzcompress()](function.gzcompress.md) - Comprime uma string
- [gzinflate()](function.gzinflate.md) - Descomprime uma string comprimida
- [gzdeflate()](function.gzdeflate.md) - Desinfla uma string
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
