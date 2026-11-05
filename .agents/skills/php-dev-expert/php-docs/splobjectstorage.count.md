# Retorna o número de objetos no armazenamento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splobjectstorage.count.php

---

# SplObjectStorage::count

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

SplObjectStorage::count — Retorna o número de objetos no armazenamento

### Descrição

public function **SplObjectStorage::count**([int](language.types.integer.md) `$mode` = **`COUNT_NORMAL`**): [int](language.types.integer.md)

Conta o número de objetos no armazenamento.

### Parâmetros

`mode`
:   Se o parâmetro opcional `mode` for definido como
    **`COUNT_RECURSIVE`** (ou 1), **SplObjectStorage::count()**
    contará recursivamente o armazenamento.

### Valor Retornado

O número de objetos no armazenamento.

### Examples

**Exemplo #1 Exemplo de **SplObjectStorage::count()****

```
<?php
$s = new SplObjectStorage();
$o1 = new stdClass;
$o2 = new stdClass;

$s->attach($o1);
$s->attach($o2);
$s->attach($o1);
var_dump($s->count());
var_dump(count($s));
?>
```

O exemplo acima produzirá
algo semelhante a:

```
int(2)
int(2)
```

### Veja também

- [SplObjectStorage::attach()](splobjectstorage.attach.md) - Adiciona um objeto no armazenamento
- [SplObjectStorage::detach()](splobjectstorage.detach.md) - Remove um object do armazenamento

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
