# Associa dados a um objeto no armazenamento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splobjectstorage.offsetset.php

---

# SplObjectStorage::offsetSet

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

SplObjectStorage::offsetSet — Associa dados a um objeto no armazenamento

### Descrição

public function **SplObjectStorage::offsetSet**([object](language.types.object.md) `$object`, [mixed](language.types.mixed.md) `$info` = **`null`**): [void](language.types.void.md)

Associa dados a um [object](language.types.object.md) no armazenamento.

> **Nota**:
>
> **SplObjectStorage::offsetSet()** é um alias de [SplObjectStorage::attach()](splobjectstorage.attach.md).

### Parâmetros

`object`
:   O [object](language.types.object.md) para associar dados.

`info`
:   Os dados para associar ao [object](language.types.object.md).

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **SplObjectStorage::offsetSet()****

```
<?php
$s = new SplObjectStorage;

$o1 = new stdClass;

$s->offsetSet($o1, "hello"); // Similar a $s[$o1] = "hello";

var_dump($s[$o1]);
?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(5) "hello"
```

### Veja também

- [SplObjectStorage::attach()](splobjectstorage.attach.md) - Adiciona um objeto no armazenamento
- [SplObjectStorage::offsetGet()](splobjectstorage.offsetget.md) - Retorna os dados associados a um object
- [SplObjectStorage::offsetExists()](splobjectstorage.offsetexists.md) - Verifica se um objeto existe no armazenamento
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
