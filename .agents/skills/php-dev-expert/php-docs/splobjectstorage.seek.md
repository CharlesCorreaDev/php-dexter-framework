# Aponta o iterador para uma posição

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splobjectstorage.seek.php

---

# SplObjectStorage::seek

(PHP 8 >= 8.4.0)

SplObjectStorage::seek — Aponta o iterador para uma posição

### Descrição

public function **SplObjectStorage::seek**([int](language.types.integer.md) `$offset`): [void](language.types.void.md)

Aponta para uma determinada posição no iterador.

### Parâmetros

`offset`
:   A posição a ser apontada.

### Valor Retornado

Nenhum valor é retornado.

### Erros/Exceções

Lança uma exceção [OutOfBoundsException](class.outofboundsexception.md)
se `offset` não for apontável.

### Examples

**Exemplo #1 Exemplo de **SplObjectStorage::seek()****

Aponta para o item na posição 2 no iterador.

```
<?php
class Test {
    public function __construct(public string $marker) {}
}

$a = new Test("a");
$b = new Test("b");
$c = new Test("c");

$storage = new SplObjectStorage();
$storage[$a] = "primeiro";
$storage[$b] = "segundo";
$storage[$c] = "terceiro";

$storage->seek(2);
var_dump($storage->key());
var_dump($storage->current());
?>
```

O exemplo acima produzirá:

```
int(2)
object(Test)#3 (1) {
  ["marker"]=>
  string(1) "c"
}
```

### Veja também

- [SeekableIterator](class.seekableiterator.md)

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
