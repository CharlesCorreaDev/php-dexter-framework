# A classe Yaf_Route_Rewrite

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.yaf-route-rewrite.php

---

# A classe Yaf\_Route\_Rewrite

(Yaf >=1.0.0)

## Introdução

Para uso, consulte a seção de exemplo de
[Yaf\_Route\_Rewrite::\_\_construct()](yaf-route-rewrite.construct.md)

## Resumo da classe

class **Yaf\_Route\_Rewrite**

extends
[Yaf\_Route\_Interface](class.yaf-route-interface.md)
implements
[Yaf\_Route\_Interface](class.yaf-route-interface.md) {

/\* Propriedades \*/

protected
[$\_route](class.yaf-route-rewrite.md#yaf-route-rewrite.props.route);

protected
[$\_default](class.yaf-route-rewrite.md#yaf-route-rewrite.props.default);

protected
[$\_verify](class.yaf-route-rewrite.md#yaf-route-rewrite.props.verify);

/\* Métodos \*/

public function [\_\_construct](yaf-route-rewrite.construct.md)([string](language.types.string.md) `$match`, [array](language.types.array.md) `$route`, [array](language.types.array.md) `$verify` = ?)

public function [assemble](yaf-route-rewrite.assemble.md)([array](language.types.array.md) `$info`, [array](language.types.array.md) `$query` = ?): [string](language.types.string.md)

public function [route](yaf-route-rewrite.route.md)([Yaf\_Request\_Abstract](class.yaf-request-abstract.md) `$request`): [bool](language.types.boolean.md)

/\* Métodos herdados \*/

abstract public function [Yaf\_Route\_Interface::assemble](yaf-route-interface.assemble.md)([array](language.types.array.md) `$info`, [array](language.types.array.md) `$query` = ?): [string](language.types.string.md)

abstract public function [Yaf\_Route\_Interface::route](yaf-route-interface.route.md)([Yaf\_Request\_Abstract](class.yaf-request-abstract.md) `$request`): [bool](language.types.boolean.md)

}

## Propriedades

\_route

\_default

\_verify

## Índice

- [Yaf\_Route\_Rewrite::assemble](yaf-route-rewrite.assemble.md) — Monta um URL
- [Yaf\_Route\_Rewrite::\_\_construct](yaf-route-rewrite.construct.md) — Construtor de Yaf\_Route\_Rewrite
- [Yaf\_Route\_Rewrite::route](yaf-route-rewrite.route.md) — route

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
