# Resolve o nome do arquivo em relação ao caminho de include

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.stream-resolve-include-path.php

---

# stream\_resolve\_include\_path

(PHP 5 >= 5.3.2, PHP 7, PHP 8)

stream\_resolve\_include\_path — 
Resolve o nome do arquivo em relação ao caminho de include

### Descrição

function **stream\_resolve\_include\_path**([string](language.types.string.md) `$filename`): [string](language.types.string.md)|[false](language.types.singleton.md)

Resolve `filename` em relação ao caminho de include de acordo com as mesmas regras que [fopen()](function.fopen.md)/[include](function.include.md).

### Parâmetros

`filename`
:   O nome de arquivo a resolver.

### Valor Retornado

Retorna uma [string](language.types.string.md) contendo o caminho absoluto para o arquivo, ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Exemplo de **stream\_resolve\_include\_path()****

Exemplo básico de uso.

```
<?php
var_dump(stream_resolve_include_path("test.php"));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(22) "/var/www/html/test.php"
```

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
