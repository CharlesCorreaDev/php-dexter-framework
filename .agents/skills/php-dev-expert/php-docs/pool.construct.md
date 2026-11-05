# Cria um novo pool de trabalhadores

> **Fonte / Source:** https://www.php.net/manual/pt_BR/pool.construct.php

---

# Pool::\_\_construct

(PECL pthreads >= 2.0.0)

Pool::\_\_construct — Cria um novo pool de trabalhadores

### Descrição

public function **Pool::\_\_construct**([int](language.types.integer.md) `$size`, [string](language.types.string.md) `$class` = ?, [array](language.types.array.md) `$ctor` = ?)

Constrói um novo pool de trabalhadores. Os conjuntos criam suas threads lentamente, o que
significa que novas threads só serão geradas quando forem necessárias para executar
tarefas.

### Parâmetros

`size`
:   O número máximo de trabalhadores para este pool criar

`class`
:   A classe para novos trabalhadores. Se nenhuma classe for fornecida, o padrão será a classe
    [Worker](class.worker.md).

`ctor`
:   Um array de argumentos a serem passados ​​aos construtores de novos trabalhadores.

### Examples

**Exemplo #1 Criando Pools**

```
<?php
class MyWorker extends Worker {

    public function __construct(Something $something) {
        $this->something = $something;
    }

    public function run() {
        /** ... **/
    }
}

$pool = new Pool(8, \MyWorker::class, [new Something()]);

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
  NULL
  ["work":protected]=>
  NULL
  ["ctor":protected]=>
  array(1) {
    [0]=>
    object(Something)#2 (0) {
    }
  }
  ["last":protected]=>
  int(0)
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
