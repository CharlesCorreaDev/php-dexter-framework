# Envia um objeto para execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/pool.submit.php

---

# Pool::submit

(PECL pthreads >= 2.0.0)

Pool::submit — Envia um objeto para execução

### Descrição

public function **Pool::submit**([Threaded](class.threaded.md) `$task`): [int](language.types.integer.md)

Envia a tarefa para o próximo trabalhador no Pool

### Parâmetros

`task`
:   A tarefa para execução

### Valor Retornado

o identificador do trabalhador que executa o objeto

### Examples

**Exemplo #1 Envio de tarefas**

```
<?php
class MyWork extends Threaded {

    public function run() {
        /* ... */
    }
}

class MyWorker extends Worker {

    public function __construct(Something $something) {
        $this->something = $something;
    }

    public function run() {
        /** ... **/
    }
}

$pool = new Pool(8, \MyWorker::class, [new Something()]);
$pool->submit(new MyWork());
var_dump($pool);
?>
```

O exemplo acima produzirá:

```
object(Pool)#1 (6) {
  ["size":protected]=>
  int(8)
  ["class":protected]=>
  string(8) "MyWorker"
  ["workers":protected]=>
  array(1) {
    [0]=>
    object(MyWorker)#4 (1) {
      ["something"]=>
      object(Something)#5 (0) {
      }
    }
  }
  ["work":protected]=>
  array(1) {
    [0]=>
    object(MyWork)#3 (1) {
      ["worker"]=>
      object(MyWorker)#5 (1) {
        ["something"]=>
        object(Something)#6 (0) {
        }
      }
    }
  }
  ["ctor":protected]=>
  array(1) {
    [0]=>
    object(Something)#2 (0) {
    }
  }
  ["last":protected]=>
  int(1)
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
