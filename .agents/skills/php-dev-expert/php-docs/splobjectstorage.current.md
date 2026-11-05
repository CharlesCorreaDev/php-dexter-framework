# Retorna a entrada atual do armazenamento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/splobjectstorage.current.php

---

# SplObjectStorage::current

(PHP 5 >= 5.1.0, PHP 7, PHP 8)

SplObjectStorage::current — Retorna a entrada atual do armazenamento

### Descrição

public function **SplObjectStorage::current**(): [object](language.types.object.md)

Retorna a entrada atual do armazenamento.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O [object](language.types.object.md) na posição atual do iterador.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| 8.1.0 | **SplObjectStorage::current()** agora lança uma exceção [Error](class.error.md) se a posição atual for inválida. Anteriormente, **`false`** era retornado. |

### Examples

**Exemplo #1 Exemplo de **SplObjectStorage::current()****

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

- [SplObjectStorage::rewind()](splobjectstorage.rewind.md) - Retrocede o iterador para o primeiro elemento do armazenamento
- [SplObjectStorage::key()](splobjectstorage.key.md) - Retorna o índice em que o iterador está atualmente
- [SplObjectStorage::next()](splobjectstorage.next.md) - Move para a próxima entrada
- [SplObjectStorage::valid()](splobjectstorage.valid.md) - Retorna se a entrada atual do iterador é válida
- [SplObjectStorage::getInfo()](splobjectstorage.getinfo.md) - Retorna os dados associados à entrada atual do iterador

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
