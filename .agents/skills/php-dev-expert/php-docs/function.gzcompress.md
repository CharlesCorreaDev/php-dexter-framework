# Comprime uma string

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gzcompress.php

---

# gzcompress

(PHP 4 >= 4.0.1, PHP 5, PHP 7, PHP 8)

gzcompress — Comprime uma string

### Descrição

function **gzcompress**([string](language.types.string.md) `$data`, [int](language.types.integer.md) `$level` = -1, [int](language.types.integer.md) `$encoding` = **`ZLIB_ENCODING_DEFLATE`**): [string](language.types.string.md)|[false](language.types.singleton.md)

+
Esta função comprime a string fornecida usando o formato de dados
`ZLIB`.

Para detalhes sobre o algoritmo de compressão ZLIB, consulte o documento
"[» Formato de dados compactados ZLIB
Especificação versão 3.3](https://datatracker.ietf.org/doc/html/rfc1950)" (RFC 1950).

> **Nota**:
>
> Isso *não* é o mesmo que compressão gzip,
> que inclui alguns dados de cabeçalho. Veja [gzencode()](function.gzencode.md)
> para compressão gzip.

### Parâmetros

`data`
:   Os dados a serem comprimidos.

`level`
:   O nível de compressão. Pode ser dado como 0 para nenhuma compressão até 9
    para máxima compressão.

    Se -1 for usado, a compressão padrão da biblioteca zlib é usada, que é 6.

`encoding`
:   Uma das constantes **`ZLIB_ENCODING_*`**.

### Valor Retornado

A string comprimida ou **`false`** se ocorrer um erro.

### Examples

**Exemplo #1 Exemplo de **gzcompress()****

```
<?php
$compressed = gzcompress('Me comprima', 9);
echo $compressed;
?>
```

### Veja também

- [gzdeflate()](function.gzdeflate.md) - Desinfla uma string
- [gzinflate()](function.gzinflate.md) - Descomprime uma string comprimida
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
