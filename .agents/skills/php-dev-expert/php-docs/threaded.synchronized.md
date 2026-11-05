# Sincronização

> **Fonte / Source:** https://www.php.net/manual/pt_BR/threaded.synchronized.php

---

# Threaded::synchronized

(PECL pthreads >= 2.0.0)

Threaded::synchronized — Sincronização

### Descrição

public function **Threaded::synchronized**([Closure](class.closure.md) `$block`, [mixed](language.types.mixed.md) `...$args`): [mixed](language.types.mixed.md)

Executa o bloco enquanto mantém o bloqueio de sincronização dos objetos referenciados para o contexto de chamada.

### Parâmetros

`block`
:   O bloco de código a ser executado

`args`
:   Lista de argumentos de comprimento variável para usar como argumentos de função para o bloco

### Valor Retornado

O valor de retorno do bloco

### Examples

**Exemplo #1 Sincronizando**

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
$my->synchronized(function($thread){
    $thread->done = true;
    $thread->notify();
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
