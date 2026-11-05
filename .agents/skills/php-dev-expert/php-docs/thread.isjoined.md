# Detecção de estado

> **Fonte / Source:** https://www.php.net/manual/pt_BR/thread.isjoined.php

---

# Thread::isJoined

(PECL pthreads >= 2.0.0)

Thread::isJoined — Detecção de estado

### Descrição

public function **Thread::isJoined**(): [bool](language.types.boolean.md)

Informa se o thread referenciado foi ligado.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Detecta o estado do Thread referenciado**

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
var_dump($my->isJoined());
$my->synchronized(function($thread){
    $thread->done = true;
    $thread->notify();
}, $my);
?>
```

O exemplo acima produzirá:

```
bool(false)
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
