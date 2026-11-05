# A classe Swoole\Atomic

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.swoole-atomic.php

---

# A classe Swoole\Atomic

(PECL swoole >= 1.9.0)

## Introdução

## Resumo da classe

class **Swoole\Atomic**
{

/\* Métodos \*/

public function [add](swoole-atomic.add.md)([int](language.types.integer.md) `$add_value` = ?): [int](language.types.integer.md)

public function [cmpset](swoole-atomic.cmpset.md)([int](language.types.integer.md) `$cmp_value`, [int](language.types.integer.md) `$new_value`): [int](language.types.integer.md)

public function [get](swoole-atomic.get.md)(): [int](language.types.integer.md)

public function [set](swoole-atomic.set.md)([int](language.types.integer.md) `$value`): [int](language.types.integer.md)

public function [sub](swoole-atomic.sub.md)([int](language.types.integer.md) `$sub_value` = ?): [int](language.types.integer.md)

}

## Índice

- [Swoole\Atomic::add](swoole-atomic.add.md) — Adiciona um número ao valor do objeto atômico.
- [Swoole\Atomic::cmpset](swoole-atomic.cmpset.md) — Compara e define o valor do objeto atômico.
- [Swoole\Atomic::\_\_construct](swoole-atomic.construct.md) — Constrói um objeto atômico do Swoole
- [Swoole\Atomic::get](swoole-atomic.get.md) — Obtém o valor atual do objeto atômico.
- [Swoole\Atomic::set](swoole-atomic.set.md) — Define um novo valor para o objeto atômico.
- [Swoole\Atomic::sub](swoole-atomic.sub.md) — Subtrai um número ao valor do objeto atômico.

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
