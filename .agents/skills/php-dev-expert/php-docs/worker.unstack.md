# Trabalho de desempilhamento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/worker.unstack.php

---

# Worker::unstack

(PECL pthreads >= 2.0.0)

Worker::unstack — Trabalho de desempilhamento

### Descrição

public function **Worker::unstack**(): [int](language.types.integer.md)

Remove a primeira tarefa (a mais antiga) da pilha.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

O novo tamanho da pilha.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL pthreads 3.0.0 | O parâmetro para especificar a tarefa a ser desempilhada foi removido. Agora, apenas a primeira tarefa na pilha é removida. |

### Examples

**Exemplo #1 Removendo objetos da pilha de Workers**

```
<?php
$my = new Worker();
$work = new class extends Threaded {};

var_dump($my->stack($work));
var_dump($my->unstack());
```

O exemplo acima produzirá:

```
int(1)
int(0)
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
