# Move para a próxima entrada

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splobjectstorage.next.php

---

# SplObjectStorage::next

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

SplObjectStorage::next — Move para a próxima entrada

### Descrição

public function **SplObjectStorage::next**(): [void](language.types.void.md)

Move o iterador para o próximo [object](language.types.object.md) no armazenamento.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **SplObjectStorage::next()****

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

- [SPLObjectStorage::rewind()](splobjectstorage.rewind.md) - Retrocede o iterador para o primeiro elemento do armazenamento

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
