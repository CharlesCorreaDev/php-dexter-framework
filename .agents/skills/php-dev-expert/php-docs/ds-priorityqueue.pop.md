# Remove e retorna o valor com a maior prioridade

> **Fonte / Source:** https://www.php.net/manual/pt_BR/ds-priorityqueue.pop.php

---

# Ds\PriorityQueue::pop

(PECL ds >= 1.0.0)

Ds\PriorityQueue::pop — Remove e retorna o valor com a maior prioridade

### Descrição

public function **Ds\PriorityQueue::pop**(): [mixed](language.types.mixed.md)

Remove e retorna o valor na frente da fila, ou seja, o valor
com a maior prioridade.

> **Nota**:
>
> Valores com igual prioridade seguem a lógica FIFO (primeiro a entrar, primeiro a sair).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O valor removido que estava na frente da fila.

### Erros/Exceções

[UnderflowException](class.underflowexception.md) se vazio.

### Examples

**Exemplo #1 Exemplo de **Ds\PriorityQueue::pop()****

```
<?php
$queue = new \Ds\PriorityQueue();

$queue->push("a",  5);
$queue->push("b", 15);
$queue->push("c", 10);

print_r($queue->pop());
print_r($queue->pop());
print_r($queue->pop());
?>
```

O exemplo acima produzirá
algo semelhante a:

```
string(1) "a"
string(1) "b"
string(1) "c"
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
