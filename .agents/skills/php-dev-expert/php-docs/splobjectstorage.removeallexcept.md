# Remove todos os objetos, exceto aqueles contidos em outro armazenamento, do armazenamento atual

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splobjectstorage.removeallexcept.php

---

# SplObjectStorage::removeAllExcept

(PHP 5 >= 5.3.6, PHP 7, PHP 8)

SplObjectStorage::removeAllExcept — Remove todos os objetos, exceto aqueles contidos em outro armazenamento, do armazenamento atual

### Descrição

public function **SplObjectStorage::removeAllExcept**([SplObjectStorage](class.splobjectstorage.md) `$storage`): [int](language.types.integer.md)

Remove todos os objetos, exceto aqueles contidos em outro armazenamento, do armazenamento atual.

### Parâmetros

`storage`
:   O armazenamento contendo os elementos a serem retidos no armazenamento atual.

### Valor Retornado

Retorna o número de objetos restantes.

### Examples

**Exemplo #1 Exemplo de **SplObjectStorage::removeAllExcept()****

```
<?php
$a = (object) 'a';
$b = (object) 'b';
$c = (object) 'c';

$foo = new SplObjectStorage;
$foo->attach($a);
$foo->attach($b);

$bar = new SplObjectStorage;
$bar->attach($b);
$bar->attach($c);

$foo->removeAllExcept($bar);
var_dump($foo->contains($a));
var_dump($foo->contains($b));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
bool(false)
bool(true)
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
