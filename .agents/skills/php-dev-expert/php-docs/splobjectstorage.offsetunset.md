# Remove um objeto do armazenamento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splobjectstorage.offsetunset.php

---

# SplObjectStorage::offsetUnset

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

SplObjectStorage::offsetUnset — Remove um objeto do armazenamento

### Descrição

public function **SplObjectStorage::offsetUnset**([object](language.types.object.md) `$object`): [void](language.types.void.md)

Remove um [object](language.types.object.md) do armazenamento.

> **Nota**:
>
> **SplObjectStorage::offsetUnset()** é um alias de [SplObjectStorage::detach()](splobjectstorage.detach.md).

### Parâmetros

`object`
:   O [object](language.types.object.md) a ser removido.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **SplObjectStorage::offsetUnset()****

```
<?php
$o = new stdClass;
$s = new SplObjectStorage();
$s->attach($o);
var_dump(count($s));
$s->offsetUnset($o); // Similar a unset($s[$o])
var_dump(count($s));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
int(1)
int(0)
```

### Veja também

- [SplObjectStorage::offsetGet()](splobjectstorage.offsetget.md) - Retorna os dados associados a um object
- [SplObjectStorage::offsetSet()](splobjectstorage.offsetset.md) - Associa dados a um objeto no armazenamento
- [SplObjectStorage::offsetExists()](splobjectstorage.offsetexists.md) - Verifica se um objeto existe no armazenamento

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
