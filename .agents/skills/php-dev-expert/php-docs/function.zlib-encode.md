# Comprime dados com o codificador especificado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.zlib-encode.php

---

# zlib\_encode

(PHP 5 >= 5.4.0, PHP 7, PHP 8)

zlib\_encode — Comprime dados com o codificador especificado

### Descrição

function **zlib\_encode**([string](language.types.string.md) `$data`, [int](language.types.integer.md) `$encoding`, [int](language.types.integer.md) `$level` = -1): [string](language.types.string.md)|[false](language.types.singleton.md)

Comprime dados com o codificador especificado.

**Aviso**

Esta função não
está documentada; apenas a lista de argumentos está disponível.

### Parâmetros

`data`
:   Os dados a serem comprimidos.

`encoding`
:   O algoritmo de compressão. Pode ser **`ZLIB_ENCODING_RAW`**,
    **`ZLIB_ENCODING_DEFLATE`** ou
    **`ZLIB_ENCODING_GZIP`**.

`level`

### Valor Retornado

### Examples

**Exemplo #1 Exemplo de **zlib\_encode()****

```
<?php
$str = 'hello world';
$enc = zlib_encode($str, ZLIB_ENCODING_DEFLATE);
echo bin2hex($enc);
?>
```

O exemplo acima produzirá:

```
789ccb48cdc9c95728cf2fca4901001a0b045d
```

### Veja também

- [zlib\_decode()](function.zlib-decode.md) - Descomprime qualquer dado codificado em raw/gzip/zlib

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
