# A classe Yaf_Session

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.yaf-session.php

---

# A classe Yaf\_Session

(Yaf >=1.0.0)

## Introdução

## Resumo da classe

class **Yaf\_Session**
implements
[Iterator](class.iterator.md), [ArrayAccess](class.arrayaccess.md), [Countable](class.countable.md) {

/\* Propriedades \*/

protected
static
[$\_instance](class.yaf-session.md#yaf-session.props.instance);

protected
[$\_session](class.yaf-session.md#yaf-session.props.session);

protected
[$\_started](class.yaf-session.md#yaf-session.props.started);

/\* Métodos \*/

private function [\_\_construct](yaf-session.construct.md)()

public function [count](yaf-session.count.md)(): [void](language.types.void.md)

public function [current](yaf-session.current.md)(): [void](language.types.void.md)

public function [del](yaf-session.del.md)([string](language.types.string.md) `$name`): [void](language.types.void.md)

public function [\_\_get](yaf-session.get.md)([string](language.types.string.md) `$name`): [void](language.types.void.md)

public static function [getInstance](yaf-session.getinstance.md)(): [void](language.types.void.md)

public function [has](yaf-session.has.md)([string](language.types.string.md) `$name`): [void](language.types.void.md)

public function [\_\_isset](yaf-session.isset.md)([string](language.types.string.md) `$name`): [void](language.types.void.md)

public function [key](yaf-session.key.md)(): [void](language.types.void.md)

public function [next](yaf-session.next.md)(): [void](language.types.void.md)

public function [offsetExists](yaf-session.offsetexists.md)([string](language.types.string.md) `$name`): [void](language.types.void.md)

public function [offsetGet](yaf-session.offsetget.md)([string](language.types.string.md) `$name`): [void](language.types.void.md)

public function [offsetSet](yaf-session.offsetset.md)([string](language.types.string.md) `$name`, [string](language.types.string.md) `$value`): [void](language.types.void.md)

public function [offsetUnset](yaf-session.offsetunset.md)([string](language.types.string.md) `$name`): [void](language.types.void.md)

public function [rewind](yaf-session.rewind.md)(): [void](language.types.void.md)

public function [\_\_set](yaf-session.set.md)([string](language.types.string.md) `$name`, [string](language.types.string.md) `$value`): [void](language.types.void.md)

public function [start](yaf-session.start.md)(): [void](language.types.void.md)

public function [\_\_unset](yaf-session.unset.md)([string](language.types.string.md) `$name`): [void](language.types.void.md)

public function [valid](yaf-session.valid.md)(): [void](language.types.void.md)

}

## Propriedades

\_instance

\_session

\_started

## Índice

- [Yaf\_Session::\_\_construct](yaf-session.construct.md) — Construtor de Yaf\_Session
- [Yaf\_Session::count](yaf-session.count.md) — count
- [Yaf\_Session::current](yaf-session.current.md) — current
- [Yaf\_Session::del](yaf-session.del.md) — del
- [Yaf\_Session::\_\_get](yaf-session.get.md) — \_\_get
- [Yaf\_Session::getInstance](yaf-session.getinstance.md) — getInstance
- [Yaf\_Session::has](yaf-session.has.md) — has
- [Yaf\_Session::\_\_isset](yaf-session.isset.md) — \_\_isset
- [Yaf\_Session::key](yaf-session.key.md) — key
- [Yaf\_Session::next](yaf-session.next.md) — next
- [Yaf\_Session::offsetExists](yaf-session.offsetexists.md) — offsetExists
- [Yaf\_Session::offsetGet](yaf-session.offsetget.md) — offsetGet
- [Yaf\_Session::offsetSet](yaf-session.offsetset.md) — offsetSet
- [Yaf\_Session::offsetUnset](yaf-session.offsetunset.md) — offsetUnset
- [Yaf\_Session::rewind](yaf-session.rewind.md) — rewind
- [Yaf\_Session::\_\_set](yaf-session.set.md) — \_\_set
- [Yaf\_Session::start](yaf-session.start.md) — start
- [Yaf\_Session::\_\_unset](yaf-session.unset.md) — \_\_unset
- [Yaf\_Session::valid](yaf-session.valid.md) — valid

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
