# Retorna um array com os nomes dos arquivos incluídos ou requeridos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/function.get-included-files.php

---

# get\_included\_files

(PHP 4, PHP 5, PHP 7, PHP 8)

get\_included\_files — Retorna um array com os nomes dos arquivos incluídos ou requeridos

### Descrição

function **get\_included\_files**(): [array](language.types.array.md)

Obtém os nomes de todos os arquivos que foram incluídos usando
[include](function.include.md), [include\_once](function.include-once.md),
[require](function.require.md) ou [require\_once](function.require-once.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um array com os nomes de todos os arquivos.

O script chamado originalmente é considerado um "arquivo incluído", portanto será
listado junto com os arquivos referenciados por
[include](function.include.md) e cia.

Os arquivos incluídos ou requeridos várias vezes aparecem apenas uma vez no
array retornado.

### Examples

**Exemplo #1 Exemplo de **get\_included\_files()****

```
<?php
// Este arquivo é o abc.php

include 'test1.php';
include_once 'test2.php';
require 'test3.php';
require_once 'test4.php';

$included_files = get_included_files();

foreach ($included_files as $filename) {
    echo "$filename\n";
}

?>
```

O exemplo acima produzirá:

```
/caminho/para/abc.php
/caminho/para/test1.php
/caminho/para/test2.php
/caminho/para/test3.php
/caminho/para/test4.php
```

### Veja também

- [include](function.include.md) - include
- [include\_once](function.include-once.md) - include\_once
- [require](function.require.md) - require
- [require\_once](function.require-once.md) - require\_once
- [get\_required\_files()](function.get-required-files.md) - Sinônimo de get\_included\_files

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
