# Lê todo o arquivo gz em um array

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.gzfile.php

---

# gzfile

(PHP 4, PHP 5, PHP 7, PHP 8)

gzfile — Lê todo o arquivo gz em um array

### Descrição

function **gzfile**([string](language.types.string.md) `$filename`, [bool](language.types.boolean.md) `$use_include_path` = **`false`**): [array](language.types.array.md)|[false](language.types.singleton.md)

Esta função é idêntica à [readgzfile()](function.readgzfile.md), exceto que
ela retorna o arquivo em um array.

### Parâmetros

`filename`
:   O nome do arquivo.

`use_include_path`
:   Se definido para **`true`**, arquivos no [include\_path](ini.core.md#ini.include-path) também são pesquisados.

### Valor Retornado

Um array contendo o arquivo, uma linha por célula, linhas vazias incluídas, e com novas linhas ainda anexadas,
ou **`false`** em caso de falha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.5.0 | `use_include_path` agora é do tipo [bool](language.types.boolean.md). Anteriormente era do tipo [int](language.types.integer.md). |

### Examples

**Exemplo #1 Exemplo de **gzfile()****

```
<?php
$lines = gzfile('algumarquivo.gz');
foreach ($lines as $line) {
    echo $line;
}
?>
```

### Veja também

- [readgzfile()](function.readgzfile.md) - Exibe um arquivo gz
- [gzopen()](function.gzopen.md) - Abre arquivo gz

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
