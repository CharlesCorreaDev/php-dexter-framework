# Cria uma string comprimida no formato gzip

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gzencode.php

---

# gzencode

(PHP 4 >= 4.0.4, PHP 5, PHP 7, PHP 8)

gzencode — Cria uma string comprimida no formato gzip

### Descrição

function **gzencode**([string](language.types.string.md) `$data`, [int](language.types.integer.md) `$level` = -1, [int](language.types.integer.md) `$encoding` = **`ZLIB_ENCODING_GZIP`**): [string](language.types.string.md)|[false](language.types.singleton.md)

Esta função retorna uma versão comprimida dos dados de entrada
`data` compatível com a saída do
programa **gzip**.

Para mais informações sobre o formato de arquivo GZIP, consulte o documento:
[» Especificação do formato de arquivo GZIP
versão 4.3](https://datatracker.ietf.org/doc/html/rfc1952) (RFC 1952).

### Parâmetros

`data`
:   Os dados a serem codificados.

`level`
:   O nível de compressão. Pode ser dado como 0 para nenhuma compressão até 9
    para máxima compressão. Se não fornecido, o nível de compressão padrão será
    o nível de compressão padrão da biblioteca zlib.

`encoding`
:   O modo de codificação. Pode ser **`FORCE_GZIP`** (o padrão)
    ou **`FORCE_DEFLATE`**.

    **`FORCE_DEFLATE`** gera
    saída compatível com o RFC 1950, consistindo de um cabeçalho zlib, os dados desinflados
    e um checksum Adler.

### Valor Retornado

A string codificada, ou **`false`** se ocorrer um erro.

### Examples

Os dados resultantes contêm os cabeçalhos e a estrutura de dados
apropriados para criar um arquivo .gz padrão, por exemplo:

**Exemplo #1 Criando um arquivo gzip**

```
<?php
$data = file_get_contents("arquivogrande.txt");
$gzdata = gzencode($data, 9);
file_put_contents("arquivogrande.txt.gz", $gzdata);
?>
```

### Veja também

- [gzdecode()](function.gzdecode.md) - Decodifica uma string comprimida usando o gzip
- [gzdeflate()](function.gzdeflate.md) - Desinfla uma string
- [gzinflate()](function.gzinflate.md) - Descomprime uma string comprimida
- [gzuncompress()](function.gzuncompress.md) - Descomprime uma string comprimida
- [gzcompress()](function.gzcompress.md) - Comprime uma string
- [» 
  Especificação do Formato de Dados Comprimidos ZLIB (RFC 1950)](https://datatracker.ietf.org/doc/html/rfc1950)

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
