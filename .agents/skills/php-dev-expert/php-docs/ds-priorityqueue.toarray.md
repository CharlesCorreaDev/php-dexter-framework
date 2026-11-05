# Converte a fila para um array

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-priorityqueue.toarray.php

---

# Ds\PriorityQueue::toArray

(PECL ds >= 1.0.0)

Ds\PriorityQueue::toArray — 
Converte a fila para um [array](language.types.array.md)

### Descrição

public function **Ds\PriorityQueue::toArray**(): [array](language.types.array.md)

Converte a fila para um [array](language.types.array.md).

> **Nota**:
>
> Este método não é destrutivo.

> **Nota**:
>
> A conversão direta para um [array](language.types.array.md) ainda não é suportada.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um [array](language.types.array.md) contendo todos os valores na mesma ordem que a fila.

### Examples

**Exemplo #1 Exemplo de **Ds\PriorityQueue::toArray()****

```
<?php
$queue = new \Ds\PriorityQueue();

$queue->push("a",  5);
$queue->push("b", 15);
$queue->push("c", 10);

var_dump($queue->toArray());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
array(3) {
  [0]=>
  string(1) "b"
  [1]=>
  string(1) "c"
  [2]=>
  string(1) "a"
}
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
