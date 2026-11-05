# Converte a fila para um array

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-queue.toarray.php

---

# Ds\Queue::toArray

(PECL ds >= 1.0.0)

Ds\Queue::toArray — 
Converte a fila para um [array](language.types.array.md)

### Descrição

public function **Ds\Queue::toArray**(): [array](language.types.array.md)

Converte a fila para um [array](language.types.array.md).

> **Nota**:
>
> A conversão direta para um [array](language.types.array.md) ainda não é suportada.

> **Nota**:
>
> Este método não é destrutivo.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Um [array](language.types.array.md) contendo todos os valores na mesma ordem da fila.

### Examples

**Exemplo #1 Exemplo de **Ds\Queue::toArray()****

```
<?php
$queue = new \Ds\Queue([1, 2, 3]);

var_dump($queue->toArray());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
array(3) {
  [0]=>
  int(1)
  [1]=>
  int(2)
  [2]=>
  int(3)
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
