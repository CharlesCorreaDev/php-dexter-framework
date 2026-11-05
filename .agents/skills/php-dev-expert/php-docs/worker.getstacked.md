# Obtém o tamanho da pilha restante

> **Fonte / Source:** https://www.php.net/manual/pt_BR/worker.getstacked.php

---

# Worker::getStacked

(PECL pthreads >= 2.0.0)

Worker::getStacked — Obtém o tamanho da pilha restante

### Descrição

public function **Worker::getStacked**(): [int](language.types.integer.md)

Retorna o número de tarefas restantes na pilha

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna o número de tarefas atualmente aguardando para serem executadas pelo trabalhador

### Examples

**Exemplo #1 Um exemplo básico de **Worker::getStacked****

```
<?php
$worker = new Worker();

for ($i = 0; $i < 5; ++$i) {
    $worker->stack(new class extends Threaded {});
}

echo "Existem {$worker->getStacked()} tarefas empilhadas\n";
```

O exemplo acima produzirá:

```
Existem 5 tarefas empilhadas
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
