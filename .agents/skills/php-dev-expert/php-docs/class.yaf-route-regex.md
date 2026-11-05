# A classe Yaf_Route_Regex

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.yaf-route-regex.php

---

# A classe Yaf\_Route\_Regex

(Yaf >=1.0.0)

## Introdução

**Yaf\_Route\_Regex** é a rota mais flexível dentre
as rotas incluídas no Yaf.

## Resumo da classe

class **Yaf\_Route\_Regex**

extends
[Yaf\_Route\_Interface](class.yaf-route-interface.md)
implements
[Yaf\_Route\_Interface](class.yaf-route-interface.md) {

/\* Propriedades \*/

protected
[$\_route](class.yaf-route-regex.md#yaf-route-regex.props.route);

protected
[$\_default](class.yaf-route-regex.md#yaf-route-regex.props.default);

protected
[$\_maps](class.yaf-route-regex.md#yaf-route-regex.props.maps);

protected
[$\_verify](class.yaf-route-regex.md#yaf-route-regex.props.verify);

/\* Métodos \*/

public function [\_\_construct](yaf-route-regex.construct.md)(  
    [string](language.types.string.md) `$match`,  
    [array](language.types.array.md) `$route`,  
    [array](language.types.array.md) `$map` = ?,  
    [array](language.types.array.md) `$verify` = ?,  
    [string](language.types.string.md) `$reverse` = ?  
)

public function [assemble](yaf-route-regex.assemble.md)([array](language.types.array.md) `$info`, [array](language.types.array.md) `$query` = ?): [?](language.types.null.md)[string](language.types.string.md)

public function [route](yaf-route-regex.route.md)([Yaf\_Request\_Abstract](class.yaf-request-abstract.md) `$request`): [bool](language.types.boolean.md)

/\* Métodos herdados \*/

abstract public function [Yaf\_Route\_Interface::assemble](yaf-route-interface.assemble.md)([array](language.types.array.md) `$info`, [array](language.types.array.md) `$query` = ?): [string](language.types.string.md)

abstract public function [Yaf\_Route\_Interface::route](yaf-route-interface.route.md)([Yaf\_Request\_Abstract](class.yaf-request-abstract.md) `$request`): [bool](language.types.boolean.md)

}

## Propriedades

\_route

\_default

\_maps

\_verify

## Índice

- [Yaf\_Route\_Regex::assemble](yaf-route-regex.assemble.md) — Monta um URL
- [Yaf\_Route\_Regex::\_\_construct](yaf-route-regex.construct.md) — Construtor de Yaf\_Route\_Regex
- [Yaf\_Route\_Regex::route](yaf-route-regex.route.md) — Encaminha uma solicitação

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
