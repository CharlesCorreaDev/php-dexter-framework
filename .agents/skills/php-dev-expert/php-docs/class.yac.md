# A classe Yac

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.yac.php

---

# A classe Yac

(PECL yac >= 1.0.0)

## Introdução

## Resumo da classe

class **Yac**
{

/\* Propriedades \*/

protected
[$\_prefix](class.yac.md#yac.props.prefix);

/\* Métodos \*/

public function [\_\_construct](yac.construct.md)([string](language.types.string.md) `$prefix` = "")

public function [add](yac.add.md)([string](language.types.string.md) `$keys`, [mixed](language.types.mixed.md) `$value`, [int](language.types.integer.md) `$ttl` = 0): [bool](language.types.boolean.md)

public function [add](yac.add.md)([array](language.types.array.md) `$key_vals`): [bool](language.types.boolean.md)

public function [delete](yac.delete.md)([string](language.types.string.md)|[array](language.types.array.md) `$keys`, [int](language.types.integer.md) `$ttl` = ?): [bool](language.types.boolean.md)

public function [dump](yac.dump.md)([int](language.types.integer.md) `$num`): [mixed](language.types.mixed.md)

public function [flush](yac.flush.md)(): [bool](language.types.boolean.md)

public function [get](yac.get.md)([string](language.types.string.md)|[array](language.types.array.md) `$key`, [int](language.types.integer.md) `&$cas` = **`null`**): [mixed](language.types.mixed.md)

public function [\_\_get](yac.getter.md)([string](language.types.string.md) `$key`): [mixed](language.types.mixed.md)

public function [info](yac.info.md)(): [array](language.types.array.md)

public function [set](yac.set.md)([string](language.types.string.md) `$keys`, [mixed](language.types.mixed.md) `$value`, [int](language.types.integer.md) `$ttl` = 0): [bool](language.types.boolean.md)

public function [add](yac.add.md)([array](language.types.array.md) `$key_vals`): [bool](language.types.boolean.md)

public function [\_\_set](yac.setter.md)([string](language.types.string.md) `$keys`, [mixed](language.types.mixed.md) `$value`): [mixed](language.types.mixed.md)

}

## Propriedades

\_prefix

## Índice

- [Yac::add](yac.add.md) — Armazena em cache
- [Yac::\_\_construct](yac.construct.md) — Construtor
- [Yac::delete](yac.delete.md) — Exclui itens do cache
- [Yac::dump](yac.dump.md) — Despeja o cache
- [Yac::flush](yac.flush.md) — Descarrega o cache
- [Yac::get](yac.get.md) — Obtém valores do cache
- [Yac::\_\_get](yac.getter.md) — Obtém valores do cache
- [Yac::info](yac.info.md) — Obtém o status do cache
- [Yac::set](yac.set.md) — Armazena no cache
- [Yac::\_\_set](yac.setter.md) — Armazena no cache

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
