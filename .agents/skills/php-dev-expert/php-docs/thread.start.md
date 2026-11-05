# Execução

> **Fonte / Source:** https://www.php.net/manual/pt_BR/thread.start.php

---

# Thread::start

(PECL pthreads >= 2.0.0)

Thread::start — Execução

### Descrição

public function **Thread::start**([int](language.types.integer.md) `$options` = ?): [bool](language.types.boolean.md)

Iniciará um novo Thread para executar o método run implementado.

### Parâmetros

`options`
:   Uma máscara opcional de constantes de herança, por padrão PTHREADS\_INHERIT\_ALL

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Examples

**Exemplo #1 Iniciando Threads**

```
<?php
class My extends Thread {
    public function run() {
        /** ... **/
    }
}
$my = new My();
var_dump($my->start());
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
