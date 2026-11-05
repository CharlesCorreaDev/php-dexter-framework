# Constrói um novo objeto SyncSemaphore

> **Fonte / Source:** https://www.php.net/manual/pt_BR/syncsemaphore.construct.php

---

# SyncSemaphore::\_\_construct

(PECL sync >= 1.0.0)

SyncSemaphore::\_\_construct — Constrói um novo objeto SyncSemaphore

### Descrição

public function **SyncSemaphore::\_\_construct**([string](language.types.string.md) `$name` = ?, [int](language.types.integer.md) `$initialval` = 1, [bool](language.types.boolean.md) `$autounlock` = **`true`**)

Constrói um semáforo nomeado ou não nomeado.

### Parâmetros

`name`
:   O nome do semáforo, se este for um objeto de semáforo nomeado.

    > **Nota**:
    >
    > Se o nome já existir, ele deve poder ser aberto pelo usuário atual
    > com o qual o processo está sendo executado, ou uma exceção será lançada com uma
    > mensagem de erro sem sentido.

`initialval`
:   O valor inicial do semáforo. Este é o número de bloqueios que podem ser obtidos.

`autounlock`
:   Especifica se o semáforo deve ou não ser desbloqueado automaticamente na
    conclusão do script PHP.

    **Aviso**

    Se um objeto for um semáforo nomeado com um desbloqueio automático igual a **`false`**, o objeto estiver
    bloqueado e o script PHP for concluído antes que o objeto seja desbloqueado, então o
    semáforo subjacente terminará em um estado inconsistente.

### Valor Retornado

O novo objeto [SyncSemaphore](class.syncsemaphore.md).

### Erros/Exceções

Uma exceção será lançada se o semáforo não puder ser criado ou aberto.

### Examples

**Exemplo #1 Exemplo de **SyncSemaphore::\_\_construct()****

```
<?php
$semaphore = new SyncSemaphore("LimitedResource_2clients", 2);

if (!$semaphore->lock(3000))
{
    echo "Não é possível bloquear o semáforo.";

    exit();
}

/* ... */

$semaphore->unlock();
?>
```

### Veja também

- [SyncSemaphore::lock()](syncsemaphore.lock.md) - Diminui a contagem do semáforo ou espera
- [SyncSemaphore::unlock()](syncsemaphore.unlock.md) - Aumenta a contagem do semáforo

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
