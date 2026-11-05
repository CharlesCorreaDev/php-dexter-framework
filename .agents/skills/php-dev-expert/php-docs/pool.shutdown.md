# Desliga todos os trabalhadores

> **Fonte / Source:** https://www.php.net/manual/pt_BR/pool.shutdown.php

---

# Pool::shutdown

(PECL pthreads >= 2.0.0)

Pool::shutdown — Desliga todos os trabalhadores

### Descrição

public function **Pool::shutdown**(): [void](language.types.void.md)

Desliga todos os trabalhadores no pool. Isso bloqueará até que todas as
tarefas enviadas sejam executadas.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Examples

**Exemplo #1 Desligando um pool**

```
<?php
class Task extends Threaded
{
    public function run()
    {
        usleep(500000);
    }
}

$pool = new Pool(4);

for ($i = 0; $i < 10; ++$i) {
    $pool->submit(new Task());
}

$pool->shutdown(); // bloqueia até que todas as tarefas enviadas tenham terminado de ser executadas
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
