# Remove objetos contidos em outro armazenamento do armazenamento atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splobjectstorage.removeall.php

---

# SplObjectStorage::removeAll

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

SplObjectStorage::removeAll — Remove objetos contidos em outro armazenamento do armazenamento atual

### Descrição

public function **SplObjectStorage::removeAll**([SplObjectStorage](class.splobjectstorage.md) `$storage`): [int](language.types.integer.md)

Remove objetos contidos em outro armazenamento do armazenamento atual.

### Parâmetros

`storage`
:   O armazenamento contendo os elementos a serem removidos.

### Valor Retornado

Retorna o número de objetos restantes.

### Examples

**Exemplo #1 Exemplo de **SplObjectStorage::removeAll()****

```
<?php
$o1 = new stdClass;
$o2 = new stdClass;
$a = new SplObjectStorage();
$a[$o1] = "foo";

$b = new SplObjectStorage();
$b[$o1] = "bar";
$b[$o2] = "gee";

var_dump(count($b));
$b->removeAll($a);
var_dump(count($b));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
int(2)
int(1)
```

### Veja também

- [SplObjectStorage::addAll()](splobjectstorage.addall.md) - Adiciona todos os objetos de outro armazenamento

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
