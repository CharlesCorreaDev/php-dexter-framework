# A classe Swoole\Connection\Iterator

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.swoole-connection-iterator.php

---

# A classe Swoole\Connection\Iterator

(PECL swoole >= 1.9.0)

## Introdução

## Resumo da classe

class **Swoole\Connection\Iterator**
implements
[Iterator](class.iterator.md), [Countable](class.countable.md), [ArrayAccess](class.arrayaccess.md) {

/\* Métodos \*/

public function [count](swoole-connection-iterator.count.md)(): [int](language.types.integer.md)

public function [current](swoole-connection-iterator.current.md)(): Connection

public function [key](swoole-connection-iterator.key.md)(): [int](language.types.integer.md)

public function [next](swoole-connection-iterator.next.md)(): Connection

public function [offsetExists](swoole-connection-iterator.offsetexists.md)([int](language.types.integer.md) `$index`): [bool](language.types.boolean.md)

public function [offsetGet](swoole-connection-iterator.offsetget.md)([string](language.types.string.md) `$index`): Connection

public function [offsetSet](swoole-connection-iterator.offsetset.md)([int](language.types.integer.md) `$offset`, [mixed](language.types.mixed.md) `$connection`): [void](language.types.void.md)

public function [offsetUnset](swoole-connection-iterator.offsetunset.md)([int](language.types.integer.md) `$offset`): [void](language.types.void.md)

public function [rewind](swoole-connection-iterator.rewind.md)(): [void](language.types.void.md)

public function [valid](swoole-connection-iterator.valid.md)(): [bool](language.types.boolean.md)

}

## Índice

- [Swoole\Connection\Iterator::count](swoole-connection-iterator.count.md) — Conta conexões.
- [Swoole\Connection\Iterator::current](swoole-connection-iterator.current.md) — Retorna a entrada de conexão atual.
- [Swoole\Connection\Iterator::key](swoole-connection-iterator.key.md) — Retorna a chave da conexão atual.
- [Swoole\Connection\Iterator::next](swoole-connection-iterator.next.md) — Move para a próxima conexão.
- [Swoole\Connection\Iterator::offsetExists](swoole-connection-iterator.offsetexists.md) — Verifica se o deslocamento existe.
- [Swoole\Connection\Iterator::offsetGet](swoole-connection-iterator.offsetget.md) — Deslocamento para recuperar.
- [Swoole\Connection\Iterator::offsetSet](swoole-connection-iterator.offsetset.md) — tribui uma conexão ao deslocamento especificado.
- [Swoole\Connection\Iterator::offsetUnset](swoole-connection-iterator.offsetunset.md) — Desfaz um deslocamento.
- [Swoole\Connection\Iterator::rewind](swoole-connection-iterator.rewind.md) — Rebobina o iterador
- [Swoole\Connection\Iterator::valid](swoole-connection-iterator.valid.md) — Verifica se a posição atual é válida.

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
