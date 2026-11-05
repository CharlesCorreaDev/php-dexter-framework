# Retorna o índice em que o iterador está atualmente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splobjectstorage.key.php

---

# SplObjectStorage::key

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

SplObjectStorage::key — Retorna o índice em que o iterador está atualmente

### Descrição

public function **SplObjectStorage::key**(): [int](language.types.integer.md)

Retorna o índice em que o iterador está atualmente.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O índice correspondente à posição do iterador.

### Examples

**Exemplo #1 Exemplo de **SplObjectStorage::key()****

```
<?php
$s = new SplObjectStorage();

$o1 = new stdClass;
$o2 = new stdClass;

$s->attach($o1, "d1");
$s->attach($o2, "d2");

$s->rewind();
while($s->valid()) {
    $index  = $s->key();
    $object = $s->current(); // similar a current($s)

    var_dump($index);
    var_dump($object);
    $s->next();
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
int(0)
object(stdClass)#2 (0) {
}
int(1)
object(stdClass)#3 (0) {
}
```

### Veja também

- [SplObjectStorage::rewind()](splobjectstorage.rewind.md) - Retrocede o iterador para o primeiro elemento do armazenamento
- [SplObjectStorage::current()](splobjectstorage.current.md) - Retorna a entrada atual do armazenamento
- [SplObjectStorage::next()](splobjectstorage.next.md) - Move para a próxima entrada
- [SplObjectStorage::valid()](splobjectstorage.valid.md) - Retorna se a entrada atual do iterador é válida

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
