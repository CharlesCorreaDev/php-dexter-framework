# Verifica se um objeto existe no armazenamento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splobjectstorage.offsetexists.php

---

# SplObjectStorage::offsetExists

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

SplObjectStorage::offsetExists — Verifica se um objeto existe no armazenamento

### Descrição

public function **SplObjectStorage::offsetExists**([object](language.types.object.md) `$object`): [bool](language.types.boolean.md)

Verifica se um [object](language.types.object.md) existe no armazenamento.

> **Nota**:
>
> **SplObjectStorage::offsetExists()** é um sinônimo de [SplObjectStorage::contains()](splobjectstorage.contains.md).

### Parâmetros

`object`
:   O [object](language.types.object.md) a ser procurado.

### Valor Retornado

Retorna **`true`** se o [object](language.types.object.md) existe no armazenamento,
e **`false`** caso contrário.

### Examples

**Exemplo #1 Exemplo de **SplObjectStorage::offsetExists()****

```
<?php
$s = new SplObjectStorage;
$o1 = new stdClass;
$o2 = new stdClass;

$s->attach($o1);

var_dump($s->offsetExists($o1)); // Similar a isset($s[$o1])
var_dump($s->offsetExists($o2)); // Similar a isset($s[$o2])
?>
```

O exemplo acima produzirá
algo semelhante a:

```
bool(true)
bool(false)
```

### Veja também

- [SplObjectStorage::offsetSet()](splobjectstorage.offsetset.md) - Associa dados a um objeto no armazenamento
- [SplObjectStorage::offsetGet()](splobjectstorage.offsetget.md) - Retorna os dados associados a um object
- [SplObjectStorage::offsetUnset()](splobjectstorage.offsetunset.md) - Remove um objeto do armazenamento

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
