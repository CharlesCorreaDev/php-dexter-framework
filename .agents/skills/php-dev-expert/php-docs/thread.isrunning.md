# Detecção de estado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/thread.isrunning.php

---

# Threaded::isRunning

(PECL pthreads >= 2.0.0)

Threaded::isRunning — Detecção de estado

### Descrição

public function **Threaded::isRunning**(): [bool](language.types.boolean.md)

Informa se o objeto referenciado está em execução

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Uma indicação booleana de estado.
> **Nota**:
>
> Um objeto é considerado em execução durante a execução do método "run".

### Examples

**Exemplo #1 Detectando o estado do objeto referenciado**

```
<?php
class My extends Thread {
    public function run() {
        $this->synchronized(function($thread){
            if (!$thread->done)
                $thread->wait();
        }, $this);
    }
}
$my = new My();
$my->start();
var_dump($my->isRunning());
$my->synchronized(function($thread){
    $thread->done = true;
    $thread->notify();
}, $my);
?>
```

O exemplo acima produzirá:

```
bool(true)
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
