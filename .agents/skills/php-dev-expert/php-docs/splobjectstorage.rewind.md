# Retrocede o iterador para o primeiro elemento do armazenamento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splobjectstorage.rewind.php

---

# SplObjectStorage::rewind

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

SplObjectStorage::rewind — Retrocede o iterador para o primeiro elemento do armazenamento

### Descrição

public function **SplObjectStorage::rewind**(): [void](language.types.void.md)

Retrocede o iterador para o primeiro elemento do armazenamento.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **SplObjectStorage::rewind()****

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
    $data   = $s->getInfo();

    var_dump($object);
    var_dump($data);
    $s->next();
}
?>
```

O exemplo acima produzirá
algo semelhante a:

```
object(stdClass)#2 (0) {
}
string(2) "d1"
object(stdClass)#3 (0) {
}
string(2) "d2"
```

### Veja também

- [SplObjectStorage::next()](splobjectstorage.next.md) - Move para a próxima entrada

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
