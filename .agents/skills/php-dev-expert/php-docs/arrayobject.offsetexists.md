# Retorna se o índice solicitado existe

> **Fonte / Source:** https://www.php.net/manual/pt_BR/arrayobject.offsetexists.php

---

# ArrayObject::offsetExists

(PHP 5, PHP 7, PHP 8)

ArrayObject::offsetExists — Retorna se o índice solicitado existe

### Descrição

public function **ArrayObject::offsetExists**([mixed](language.types.mixed.md) `$key`): [bool](language.types.boolean.md)

### Parâmetros

`key`
:   O índice sendo verificado.

### Valor Retornado

**`true`** se o índice solicitado existe, caso contrário **`false`**

### Examples

**Exemplo #1 Exemplo de **ArrayObject::offsetExists()****

```
<?php
$arrayobj = new ArrayObject(array('zero', 'one', 'example'=>'e.g.'));
var_dump($arrayobj->offsetExists(1));
var_dump($arrayobj->offsetExists('example'));
var_dump($arrayobj->offsetExists('notfound'));
?>
```

O exemplo acima produzirá:

```
bool(true)
bool(true)
bool(false)
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
