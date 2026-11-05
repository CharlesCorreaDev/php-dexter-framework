# Trabalho de empilhamento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/worker.stack.php

---

# Worker::stack

(PECL pthreads >= 2.0.0)

Worker::stack — Trabalho de empilhamento

### Descrição

public function **Worker::stack**([Threaded](class.threaded.md) `&$work`): [int](language.types.integer.md)

Adiciona o novo trabalho à pilha do trabalhador referenciado.

### Parâmetros

`work`
:   Um objeto [Threaded](class.threaded.md) a ser executado pelo trabalhador.

### Valor Retornado

O novo tamanho da pilha.

### Examples

**Exemplo #1 Empilhando uma tarefa para execução em um trabalhador**

```
<?php
$worker = new Worker();
$work = new class extends Threaded {};

var_dump($worker->stack($work));
```

O exemplo acima produzirá:

```
int(1)
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
