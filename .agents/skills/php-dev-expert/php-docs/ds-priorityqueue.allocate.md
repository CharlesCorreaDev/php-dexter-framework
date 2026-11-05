# Aloca memória suficiente para uma capacidade requerida

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-priorityqueue.allocate.php

---

# Ds\PriorityQueue::allocate

(PECL ds >= 1.0.0)

Ds\PriorityQueue::allocate — Aloca memória suficiente para uma capacidade requerida

### Descrição

public function **Ds\PriorityQueue::allocate**([int](language.types.integer.md) `$capacity`): [void](language.types.void.md)

Garante que memória suficiente seja alocada para uma capacidade requerida.
Isso elimina a necessidade de realocar o buffer interno à medida que os valores são adicionados.

### Parâmetros

`capacity`
:   O número de valores para os quais a capacidade deve ser alocada.

    > **Nota**:
    >
    > A capacidade permanecerá a mesma se este valor for menor ou igual à
    > capacidade atual.

    > **Nota**:
    >
    > A capacidade sempre será arredondada para o próximo número inteiro de potência de 2.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Exemplo de **Ds\PriorityQueue::allocate()****

```
<?php
$queue = new \Ds\PriorityQueue();
var_dump($queue->capacity());

$queue->allocate(100);
var_dump($queue->capacity());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
int(8)
int(128)
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
