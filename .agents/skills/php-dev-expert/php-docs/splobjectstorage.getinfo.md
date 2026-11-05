# Retorna os dados associados à entrada atual do iterador

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splobjectstorage.getinfo.php

---

# SplObjectStorage::getInfo

(PHP 5 >= 5.3.0, PHP 7, PHP 8)

SplObjectStorage::getInfo — Retorna os dados associados à entrada atual do iterador

### Descrição

public function **SplObjectStorage::getInfo**(): [mixed](language.types.mixed.md)

Retorna os dados ou informações associados ao objeto apontado pela posição atual do iterador.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Os dados associados à posição atual do iterador.

### Examples

**Exemplo #1 Exemplo de **SplObjectStorage::getInfo()****

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

- [SplObjectStorage::current()](splobjectstorage.current.md) - Retorna a entrada atual do armazenamento
- [SplObjectStorage::rewind()](splobjectstorage.rewind.md) - Retrocede o iterador para o primeiro elemento do armazenamento
- [SplObjectStorage::key()](splobjectstorage.key.md) - Retorna o índice em que o iterador está atualmente
- [SplObjectStorage::next()](splobjectstorage.next.md) - Move para a próxima entrada
- [SplObjectStorage::valid()](splobjectstorage.valid.md) - Retorna se a entrada atual do iterador é válida
- [SplObjectStorage::setInfo()](splobjectstorage.setinfo.md) - Define os dados associados à entrada atual do iterador

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
