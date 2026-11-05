# A classe Swoole\Table

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.swoole-table.php

---

# A classe Swoole\Table

(PECL swoole >= 1.9.0)

## Introdução

## Resumo da classe

class **Swoole\Table**
implements
[Iterator](class.iterator.md), [Countable](class.countable.md) {

/\* Constantes \*/

const
[int](language.types.integer.md)
[TYPE\_INT](class.swoole-table.md#swoole-table.constants.type-int) = 1;

const
[int](language.types.integer.md)
[TYPE\_STRING](class.swoole-table.md#swoole-table.constants.type-string) = 7;

const
[int](language.types.integer.md)
[TYPE\_FLOAT](class.swoole-table.md#swoole-table.constants.type-float) = 6;

/\* Métodos \*/

public function [column](swoole-table.column.md)([string](language.types.string.md) `$name`, [string](language.types.string.md) `$type`, [int](language.types.integer.md) `$size` = ?): [bool](language.types.boolean.md)

public function [count](swoole-table.count.md)(): [int](language.types.integer.md)

public function [create](swoole-table.create.md)(): [bool](language.types.boolean.md)

public function [current](swoole-table.current.md)(): [array](language.types.array.md)

public function [decr](swoole-table.decr.md)([string](language.types.string.md) `$key`, [string](language.types.string.md) `$column`, [int](language.types.integer.md) `$decrby` = ?): [int](language.types.integer.md)

public function [del](swoole-table.del.md)([string](language.types.string.md) `$key`): [bool](language.types.boolean.md)

public function [destroy](swoole-table.destroy.md)(): [bool](language.types.boolean.md)

public function [exist](swoole-table.exist.md)([string](language.types.string.md) `$key`): [bool](language.types.boolean.md)

public function [get](swoole-table.get.md)([string](language.types.string.md) `$key`, [string](language.types.string.md) `$field` = ?): [mixed](language.types.mixed.md)

public function [incr](swoole-table.incr.md)([string](language.types.string.md) `$key`, [string](language.types.string.md) `$column`, [int](language.types.integer.md) `$incrby` = ?): [int](language.types.integer.md)

public function [key](swoole-table.key.md)(): [mixed](language.types.mixed.md)

public function [next](swoole-table.next.md)(): [void](language.types.void.md)

public function [rewind](swoole-table.rewind.md)(): [void](language.types.void.md)

public function [set](swoole-table.set.md)([string](language.types.string.md) `$key`, [array](language.types.array.md) `$value`): [bool](language.types.boolean.md)

public function [valid](swoole-table.valid.md)(): [bool](language.types.boolean.md)

}

## Constantes predefinidas

**`Swoole\Table::TYPE_INT`**

**`Swoole\Table::TYPE_STRING`**

**`Swoole\Table::TYPE_FLOAT`**

## Índice

- [Swoole\Table::column](swoole-table.column.md) — Define o tipo de dados e o tamanho das colunas.
- [Swoole\Table::\_\_construct](swoole-table.construct.md) — Constrói uma tabela de memória Swoole com tamanho fixo
- [Swoole\Table::count](swoole-table.count.md) — Conta as linhas na tabela, ou conta todos os elementos na tabela se $mode = 1
- [Swoole\Table::create](swoole-table.create.md) — Cria a tabela de memória Swoole
- [Swoole\Table::current](swoole-table.current.md) — Obtém a linha atual
- [Swoole\Table::decr](swoole-table.decr.md) — Decrementa o valor na tabela Swoole pela chave e pela coluna
- [Swoole\Table::del](swoole-table.del.md) — Exclui uma linha na tabela Swoole pela chave
- [Swoole\Table::destroy](swoole-table.destroy.md) — Destrói a tabela Swoole
- [Swoole\Table::exist](swoole-table.exist.md) — Verifica se uma linha informando a chave
- [Swoole\Table::get](swoole-table.get.md) — Obtém o valor na tabela Swoole pela chave e pelo campo
- [Swoole\Table::incr](swoole-table.incr.md) — Incrementa o valor pela chave e pela coluna
- [Swoole\Table::key](swoole-table.key.md) — Obtém a chave da linha atual.
- [Swoole\Table::next](swoole-table.next.md) — Avança o iterador para a próxima linha
- [Swoole\Table::rewind](swoole-table.rewind.md) — Retrocede o iterador
- [Swoole\Table::set](swoole-table.set.md) — Atualiza uma linha da tabela pela chave
- [Swoole\Table::valid](swoole-table.valid.md) — Verifica se a linha atual é válida

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
