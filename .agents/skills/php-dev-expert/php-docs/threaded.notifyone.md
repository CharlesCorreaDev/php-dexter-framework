# Sincronização

> **Fonte / Source:** https://www.php.net/manual/pt_BR/threaded.notifyone.php

---

# Threaded::notifyOne

(PECL pthreads >= 3.0.0)

Threaded::notifyOne — Sincronização

### Descrição

public function **Threaded::notifyOne**(): [bool](language.types.boolean.md)

Envia uma notificação ao objeto referenciado. Isso desbloqueia pelo menos uma das
threads bloqueadas (em vez de desbloquear todas elas, como visto em
[Threaded::notify()](threaded.notify.md)).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Notificações e espera**

```
<?php
class My extends Thread {
    public function run() {
        /** faz com que este thread espere **/
        $this->synchronized(function($thread){
            if (!$thread->done)
                $thread->wait();
        }, $this);
    }
}
$my = new My();
$my->start();
/** envia notificação para o thread em espera **/
$my->synchronized(function($thread){
    $thread->done = true;
    $thread->notifyOne();
}, $my);
var_dump($my->join());
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
