# Retorna a versão da biblioteca SQLite3 como uma constante de string e como um número

> **Fonte / Source:** https://www.php.net/manual/pt_BR/sqlite3.version.php

---

# SQLite3::version

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

SQLite3::version — 
Retorna a versão da biblioteca SQLite3 como uma constante de string e como um número

### Descrição

public static function **SQLite3::version**(): [array](language.types.array.md)

Retorna a versão da biblioteca SQLite3 como uma constante de string e como um número.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um array associativo com as chaves "versionString" e
"versionNumber".

### Examples

**Exemplo #1 Exemplo de **SQLite3::version()****

```
<?php
print_r(SQLite3::version());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
Array
(
    [versionString] => 3.5.9
    [versionNumber] => 3005009
)
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
