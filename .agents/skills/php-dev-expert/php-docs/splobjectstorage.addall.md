# Adiciona todos os objetos de outro armazenamento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splobjectstorage.addall.php

---

# SplObjectStorage::addAll

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

SplObjectStorage::addAll — Adiciona todos os objetos de outro armazenamento

### Descrição

public function **SplObjectStorage::addAll**([SplObjectStorage](class.splobjectstorage.md) `$storage`): [int](language.types.integer.md)

Adiciona todos os pares de objetos-dados de um armazenamento diferente no armazenamento atual.

### Parâmetros

`storage`
:   O armazenamento que você deseja importar.

### Valor Retornado

O número de objetos no armazenamento.

### Examples

**Exemplo #1 Exemplo de **SplObjectStorage::addAll()****

```
<?php
$o = new stdClass;
$a = new SplObjectStorage();
$a[$o] = "hello";

$b = new SplObjectStorage();
$b->addAll($a);
echo $b[$o]."\n";
?>
```

O exemplo acima produzirá
algo semelhante a:

```
hello
```

### Veja também

- [SplObjectStorage::removeAll()](splobjectstorage.removeall.md) - Remove objetos contidos em outro armazenamento do armazenamento atual

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
