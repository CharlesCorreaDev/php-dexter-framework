# Constrói um novo objeto SyncMutex

> **Fonte / Source:** https://www.php.net/manual/pt_BR/syncmutex.construct.php

---

# SyncMutex::\_\_construct

(PECL sync >= 1.0.0)

SyncMutex::\_\_construct — Constrói um novo objeto SyncMutex

### Descrição

public function **SyncMutex::\_\_construct**([string](language.types.string.md) `$name` = ?)

Constrói um mutex contável nomeado ou sem nome.

### Parâmetros

`name`
:   O nome do mutex se este for um objeto mutex nomeado.

    > **Nota**:
    >
    > Se o nome já existir, deve ser possível abri-lo pelo usuário atual
    > que o processo está executando, caso contrário, uma exceção será lançada com uma
    > mensagem de erro sem sentido.

### Valor Retornado

O novo objeto [SyncMutex](class.syncmutex.md).

### Erros/Exceções

Uma exceção é lançada se o mutex não puder ser criado ou aberto.

### Examples

**Exemplo #1 Exemplo de **SyncMutex::\_\_construct()** de mutex nomeado com tempo limite de bloqueio**

```
<?php
$mutex = new SyncMutex("UniqueName");

if (!$mutex->lock(3000))
{
    echo "Não foi possível bloquear o mutex.";

    exit();
}

/* ... */

$mutex->unlock();
?>
```

**Exemplo #2 Exemplo de **SyncMutex::\_\_construct()** de mutex sem nome**

```
<?php
$mutex = new SyncMutex();

$mutex->lock();

/* ... */

$mutex->unlock();
?>
```

### Veja também

- [SyncMutex::lock()](syncmutex.lock.md) - Aguarda um bloqueio exclusivo
- [SyncMutex::unlock()](syncmutex.unlock.md) - Destrava o mutex

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
