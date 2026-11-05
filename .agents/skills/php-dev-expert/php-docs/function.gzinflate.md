# Descomprime uma string comprimida

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gzinflate.php

---

# gzinflate

(PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8)

gzinflate — Descomprime uma string comprimida

### Descrição

function **gzinflate**([string](language.types.string.md) `$data`, [int](language.types.integer.md) `$max_length` = 0): [string](language.types.string.md)|[false](language.types.singleton.md)

Esta função descomprime uma string comprimida.

### Parâmetros

`data`
:   Os dados comprimidos por [gzdeflate()](function.gzdeflate.md).

`max_length`
:   O comprimento máximo dos dados decodificados.

### Valor Retornado

Os dados não comprimidos originais ou **`false`** em caso de erro.

A função retornará um erro se o tamanho dos dados não comprimidos for maior que
32.768 vezes o comprimento da entrada comprimida `data`
ou, a menos que `max_length` seja `0`, se for maior que o parâmetro opcional `max_length`.

### Examples

**Exemplo #1 Exemplo de **gzinflate()****

```
<?php
$compressed   = gzdeflate('Me comprima', 9);
$uncompressed = gzinflate($compressed);
echo $uncompressed;
?>
```

### Veja também

- [gzdeflate()](function.gzdeflate.md) - Desinfla uma string
- [gzcompress()](function.gzcompress.md) - Comprime uma string
- [gzuncompress()](function.gzuncompress.md) - Descomprime uma string comprimida
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
