# A classe SyncSemaphore

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.syncsemaphore.php

---

# A classe SyncSemaphore

(PECL sync >= 1.0.0)

## Introdução

Uma implementação nativa e multiplataforma de objetos de semáforo nomeados e não nomeados.

Um semáforo restringe o acesso a um recurso limitado a um número limitado de instâncias.
Semáforos diferem de mutexes no sentido de que podem permitir que mais de uma instância
acesse um recurso ao mesmo tempo, enquanto um mutex permite apenas uma instância por vez.

## Resumo da classe

class **SyncSemaphore**
{

/\* Métodos \*/

public function [\_\_construct](syncsemaphore.construct.md)([string](language.types.string.md) `$name` = ?, [int](language.types.integer.md) `$initialval` = 1, [bool](language.types.boolean.md) `$autounlock` = **`true`**)

public function [lock](syncsemaphore.lock.md)([int](language.types.integer.md) `$wait` = -1): [bool](language.types.boolean.md)

public function [unlock](syncsemaphore.unlock.md)([int](language.types.integer.md) `&$prevcount` = ?): [bool](language.types.boolean.md)

}

## Índice

- [SyncSemaphore::\_\_construct](syncsemaphore.construct.md) — Constrói um novo objeto SyncSemaphore
- [SyncSemaphore::lock](syncsemaphore.lock.md) — Diminui a contagem do semáforo ou espera
- [SyncSemaphore::unlock](syncsemaphore.unlock.md) — Aumenta a contagem do semáforo

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
