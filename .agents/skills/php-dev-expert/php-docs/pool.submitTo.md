# Envia uma tarefa a um trabalhador específico para execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/pool.submitTo.php

---

# Pool::submitTo

(PECL pthreads >= 2.0.0)

Pool::submitTo — Envia uma tarefa a um trabalhador específico para execução

### Descrição

public function **Pool::submitTo**([int](language.types.integer.md) `$worker`, [Threaded](class.threaded.md) `$task`): [int](language.types.integer.md)

Envia uma tarefa para o trabalhador especificado no pool. Os trabalhadores são indexados
a partir de 0 e só existirão se o pool precisar criá-los (já que
as threads são geradas lentamente).

### Parâmetros

`worker`
:   O trabalhador para o qual a tarefa será enviada, indexado em `0`.

`task`
:   A tarefa para execução.

### Valor Retornado

O identificador do trabalhador que aceitou a tarefa.

### Examples

**Exemplo #1 Enviar tarefas para um trabalhador específico**

```
<?php
class Task extends Threaded {
    public function run() {
        var_dump(Thread::getCurrentThreadID());
    }
}

$pool = new Pool(2);

$pool->submit(new Task());

for ($i = 0; $i < 5; ++$i) {
    $pool->submitTo(0, new Task()); // empilha todas as tarefas no primeiro trabalhador
}

$pool->submitTo(1, new Task()); // não é possível empilhar a tarefa no segundo trabalhador porque ele ainda não existe

$pool->shutdown();
```

O exemplo acima produzirá:

```
int(4475011072)
int(4475011072)
int(4475011072)
int(4475011072)
int(4475011072)
int(4475011072)

Fatal error: Uncaught Exception: The selected worker (1) does not exist in %s:%d
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
