# A classe Yaf_Config_Simple

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.yaf-config-simple.php

---

# A classe Yaf\_Config\_Simple

(Yaf >=1.0.0)

## Introdução

## Resumo da classe

class **Yaf\_Config\_Simple**

extends
[Yaf\_Config\_Abstract](class.yaf-config-abstract.md)
implements
[Iterator](class.iterator.md), [ArrayAccess](class.arrayaccess.md), [Countable](class.countable.md) {

/\* Propriedades \*/

protected
[$\_readonly](class.yaf-config-simple.md#yaf-config-simple.props.readonly);

/\* Métodos \*/

public function [\_\_construct](yaf-config-simple.construct.md)([array](language.types.array.md) `$configs`, [bool](language.types.boolean.md) `$readonly` = false)

public function [count](yaf-config-simple.count.md)(): [void](language.types.void.md)

public function [current](yaf-config-simple.current.md)(): [void](language.types.void.md)

public function [\_\_get](yaf-config-simple.get.md)([string](language.types.string.md) `$name` = ?): [void](language.types.void.md)

public function [\_\_isset](yaf-config-simple.isset.md)([string](language.types.string.md) `$name`): [void](language.types.void.md)

public function [key](yaf-config-simple.key.md)(): [void](language.types.void.md)

public function [next](yaf-config-simple.next.md)(): [void](language.types.void.md)

public function [offsetExists](yaf-config-simple.offsetexists.md)([string](language.types.string.md) `$name`): [void](language.types.void.md)

public function [offsetGet](yaf-config-simple.offsetget.md)([string](language.types.string.md) `$name`): [void](language.types.void.md)

public function [offsetSet](yaf-config-simple.offsetset.md)([string](language.types.string.md) `$name`, [string](language.types.string.md) `$value`): [void](language.types.void.md)

public function [offsetUnset](yaf-config-simple.offsetunset.md)([string](language.types.string.md) `$name`): [void](language.types.void.md)

public function [readonly](yaf-config-simple.readonly.md)(): [void](language.types.void.md)

public function [rewind](yaf-config-simple.rewind.md)(): [void](language.types.void.md)

public function [\_\_set](yaf-config-simple.set.md)([string](language.types.string.md) `$name`, [string](language.types.string.md) `$value`): [void](language.types.void.md)

public function [toArray](yaf-config-simple.toarray.md)(): [array](language.types.array.md)

public function [valid](yaf-config-simple.valid.md)(): [void](language.types.void.md)

/\* Métodos herdados \*/

abstract public function [Yaf\_Config\_Abstract::get](yaf-config-abstract.get.md)([string](language.types.string.md) `$name`, [mixed](language.types.mixed.md) `$value`): [mixed](language.types.mixed.md)

abstract public function [Yaf\_Config\_Abstract::readonly](yaf-config-abstract.readonly.md)(): [bool](language.types.boolean.md)

abstract public function [Yaf\_Config\_Abstract::set](yaf-config-abstract.set.md)(): [Yaf\_Config\_Abstract](class.yaf-config-abstract.md)

abstract public function [Yaf\_Config\_Abstract::toArray](yaf-config-abstract.toarray.md)(): [array](language.types.array.md)

}

## Propriedades

\_config

\_readonly

## Índice

- [Yaf\_Config\_Simple::\_\_construct](yaf-config-simple.construct.md) — \_\_construct
- [Yaf\_Config\_Simple::count](yaf-config-simple.count.md) — count
- [Yaf\_Config\_Simple::current](yaf-config-simple.current.md) — current
- [Yaf\_Config\_Simple::\_\_get](yaf-config-simple.get.md) — \_\_get
- [Yaf\_Config\_Simple::\_\_isset](yaf-config-simple.isset.md) — \_\_isset
- [Yaf\_Config\_Simple::key](yaf-config-simple.key.md) — key
- [Yaf\_Config\_Simple::next](yaf-config-simple.next.md) — next
- [Yaf\_Config\_Simple::offsetExists](yaf-config-simple.offsetexists.md) — offsetExists
- [Yaf\_Config\_Simple::offsetGet](yaf-config-simple.offsetget.md) — offsetGet
- [Yaf\_Config\_Simple::offsetSet](yaf-config-simple.offsetset.md) — offsetSet
- [Yaf\_Config\_Simple::offsetUnset](yaf-config-simple.offsetunset.md) — offsetUnset
- [Yaf\_Config\_Simple::readonly](yaf-config-simple.readonly.md) — readonly
- [Yaf\_Config\_Simple::rewind](yaf-config-simple.rewind.md) — rewind
- [Yaf\_Config\_Simple::\_\_set](yaf-config-simple.set.md) — \_\_set
- [Yaf\_Config\_Simple::toArray](yaf-config-simple.toarray.md) — Converte para um array PHP
- [Yaf\_Config\_Simple::valid](yaf-config-simple.valid.md) — valid

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
