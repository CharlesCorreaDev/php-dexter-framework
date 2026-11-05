# A classe SyncMutex

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.syncmutex.php

---

# A classe SyncMutex

(PECL sync >= 1.0.0)

## Introdução

Uma implementação nativa e multiplataforma de objetos de mutex contáveis nomeados e não nomeados.

Um mutex é um objeto de exclusão mútua que restringe o acesso a um recurso compartilhado (por exemplo, um arquivo) a uma única instância.
Mutexes contáveis adquirem o mutex uma única vez e rastreiam internamente o número de vezes que o mutex é bloqueado.
O mutex é desbloqueado assim que sair do escopo ou for desbloqueado o mesmo número de vezes que foi bloqueado.

## Resumo da classe

class **SyncMutex**
{

/\* Métodos \*/

public function [\_\_construct](syncmutex.construct.md)([string](language.types.string.md) `$name` = ?)

public function [lock](syncmutex.lock.md)([int](language.types.integer.md) `$wait` = -1): [bool](language.types.boolean.md)

public function [unlock](syncmutex.unlock.md)([bool](language.types.boolean.md) `$all` = **`false`**): [bool](language.types.boolean.md)

}

## Índice

- [SyncMutex::\_\_construct](syncmutex.construct.md) — Constrói um novo objeto SyncMutex
- [SyncMutex::lock](syncmutex.lock.md) — Aguarda um bloqueio exclusivo
- [SyncMutex::unlock](syncmutex.unlock.md) — Destrava o mutex

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
