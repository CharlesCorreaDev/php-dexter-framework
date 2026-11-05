# Coleta referências a tarefas concluídas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/worker.collect.php

---

# Worker::collect

(PECL pthreads >= 3.0.0)

Worker::collect — Coleta referências a tarefas concluídas

### Descrição

public function **Worker::collect**([Callable](language.types.callable.md) `$collector` = ?): [int](language.types.integer.md)

Permite que o trabalhador colete referências determinadas como lixo pelo
coletor fornecido opcionalmente.

### Parâmetros

`collector`
:   Um coletor chamável que retorna um booleano informando se a tarefa pode ser
    coletada ou não. Somente em casos raros, um coletor personalizado precisa
    ser usado.

### Valor Retornado

O número de tarefas restantes na pilha do trabalhador a serem coletadas.

### Examples

**Exemplo #1 Um exemplo básico de **Worker::collect()****

```
<?php
$worker = new Worker();

echo "Existem atualmente {$worker->collect()} tarefas na pilha a serem coletadas\n";

for ($i = 0; $i < 15; ++$i) {
    $worker->stack(new class extends Threaded {});
}

echo "Existem {$worker->collect()} tarefas restantes na pilha para serem coletadas\n";

$worker->start();

while ($worker->collect()); // bloqueia até que todas as tarefas tenham terminado de ser executadas

echo "Existem atualmente {$worker->collect()} tarefas na pilha a serem coletadas\n";

$worker->shutdown();
```

O exemplo acima produzirá:

```
Existem atualmente 0 tarefas na pilha a serem coletadas
Existem 15 tarefas restantes na pilha para serem coletadas
Existem atualmente 0 tarefas na pilha a serem coletadas
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
