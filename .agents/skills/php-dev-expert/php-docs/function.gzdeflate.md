# Desinfla uma string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gzdeflate.php

---

# gzdeflate

(PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8)

gzdeflate — Desinfla uma string

### Descrição

function **gzdeflate**([string](language.types.string.md) `$data`, [int](language.types.integer.md) `$level` = -1, [int](language.types.integer.md) `$encoding` = **`ZLIB_ENCODING_RAW`**): [string](language.types.string.md)|[false](language.types.singleton.md)

Esta função comprime a string fornecida usando o formato de dados
`DEFLATE`.

Para detalhes sobre o algoritmo de compressão DEFLATE, consulte o documento
"[» Especificação de Formato de Dados Comprimidos
DEFLATE versão 1.3](https://datatracker.ietf.org/doc/html/rfc1951)" (RFC 1951).

### Parâmetros

`data`
:   Os dados a serem desinflados.

`level`
:   O nível de compressão. Pode ser dado como 0 para nenhuma compressão até 9
    para máxima compressão. Se não fornecido, o nível de compressão padrão será
    o nível de compressão padrão da biblioteca zlib.

`encoding`
:   Uma das constantes **`ZLIB_ENCODING_*`**.

### Valor Retornado

A string desinflada ou **`false`** se ocorrer um erro.

### Examples

**Exemplo #1 Exemplo de **gzdeflate()****

```
<?php
$compressed = gzdeflate('Me comprima', 9);
echo $compressed;
?>
```

### Veja também

- [gzinflate()](function.gzinflate.md) - Descomprime uma string comprimida
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
