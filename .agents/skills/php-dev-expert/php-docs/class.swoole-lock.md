# A classe Swoole\Lock

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.swoole-lock.php

---

# A classe Swoole\Lock

(PECL swoole >= 1.9.0)

## Introdução

## Resumo da classe

class **Swoole\Lock**
{

/\* Métodos \*/

public function [\_\_destruct](swoole-lock.destruct.md)(): [void](language.types.void.md)

public function [lock](swoole-lock.lock.md)(): [void](language.types.void.md)

public function [lock\_read](swoole-lock.lock-read.md)(): [void](language.types.void.md)

public function [trylock](swoole-lock.trylock.md)(): [void](language.types.void.md)

public function [trylock\_read](swoole-lock.trylock-read.md)(): [void](language.types.void.md)

public function [unlock](swoole-lock.unlock.md)(): [void](language.types.void.md)

}

## Índice

- [Swoole\Lock::\_\_construct](swoole-lock.construct.md) — Constrói uma trava de memória
- [Swoole\Lock::\_\_destruct](swoole-lock.destruct.md) — Destrói um bloqueio de memória do Swoole.
- [Swoole\Lock::lock](swoole-lock.lock.md) — Tenta adquirir o bloqueio. Ele vai bloquear se o bloqueio não estiver disponível.
- [Swoole\Lock::lock\_read](swoole-lock.lock-read.md) — Bloqueia um bloqueio de leitura-escrita para leitura.
- [Swoole\Lock::trylock](swoole-lock.trylock.md) — Tenta adquirir o bloqueio e retorna imediatamente mesmo que o bloqueio não esteja disponível.
- [Swoole\Lock::trylock\_read](swoole-lock.trylock-read.md) — Tenta bloquear um bloqueio de leitura-escrita para leitura e retorna imediatamente mesmo que o bloqueio não esteja disponível.
- [Swoole\Lock::unlock](swoole-lock.unlock.md) — Libera o bloqueio.

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
