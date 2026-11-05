# Coleta referências a tarefas concluídas

> **Fonte / Source:** https://www.php.net/manual/pt_BR/pool.collect.php

---

# Pool::collect

(PECL pthreads >= 2.0.0)

Pool::collect — Coleta referências a tarefas concluídas

### Descrição

public function **Pool::collect**([Callable](language.types.callable.md) `$collector` = ?): [int](language.types.integer.md)

Permite que o pool colete referências determinadas como lixo pelo
coletor fornecido opcionalmente.

### Parâmetros

`collector`
:   Um coletor chamável que retorna um booleano informando se a tarefa pode ser
    coletada ou não. Somente em casos raros, um coletor personalizado precisa
    ser usado.

### Valor Retornado

O número de tarefas restantes no pool a serem coletadas.

### Registro de Alterações

| Versão | Descrição |
| --- | --- |
| PECL pthreads 3.0.0 | Um inteiro agora é retornado, e o parâmetro `collector` agora é opcional. |

### Examples

**Exemplo #1 Um exemplo básico de **Pool::collect()****

```
<?php
$pool = new Pool(4);

for ($i = 0; $i < 15; ++$i) {
    $pool->submit(new class extends Threaded {});
}

while ($pool->collect()); // bloqueia até que todas as tarefas tenham terminado de ser executadas

$pool->shutdown();
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
