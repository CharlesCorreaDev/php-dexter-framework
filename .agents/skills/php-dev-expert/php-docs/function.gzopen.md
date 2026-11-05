# Abre arquivo gz

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gzopen.php

---

# gzopen

(PHP 4, PHP 5, PHP 7, PHP 8)

gzopen — Abre arquivo gz

### Descrição

function **gzopen**([string](language.types.string.md) `$filename`, [string](language.types.string.md) `$mode`, [bool](language.types.boolean.md) `$use_include_path` = **`false`**): [resource](language.types.resource.md)|[false](language.types.singleton.md)

Abre um arquivo gzip (.gz) para leitura ou escrita.

**gzopen()** pode ser usado para ler um arquivo que não está
no formato gzip; nesse caso, [gzread()](function.gzread.md) lerá diretamente
do arquivo sem descompressão.

### Parâmetros

`filename`
:   O nome do arquivo.

`mode`
:   Como em [fopen()](function.fopen.md) (`rb` ou
    `wb`) mas também pode incluir um nível de compressão
    (`wb9`) ou uma estratégia: `f` para
    dados filtrados como em `wb6f`, `h` para
    `compressão Huffman` como em `wb1h`.
    (Consulte a descrição de `deflateInit2`
    em zlib.h para
    mais informações sobre o parâmetro de estratégia.)

`use_include_path`
:   Se definido para **`true`**, arquivos no [include\_path](ini.core.md#ini.include-path) também são pesquisados.

### Valor Retornado

Retorna um ponteiro de arquivo para o arquivo aberto, depois disso, tudo o que você lê
deste descritor de arquivo será descomprimido de forma transparente e o que você
escreve será comprimido.

Se a abertura falhar, a função retorna **`false`**.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.5.0 | `use_include_path` agora é do tipo [bool](language.types.boolean.md). Anteriormente era do tipo [int](language.types.integer.md). |

### Examples

**Exemplo #1 Exemplo de **gzopen()****

```
<?php
$fp = gzopen("/tmp/arquivo.gz", "r");
?>
```

### Veja também

- [gzclose()](function.gzclose.md) - Fecha um ponteiro de um arquivo gz aberto

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
