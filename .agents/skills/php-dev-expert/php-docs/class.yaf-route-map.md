# A classe Yaf_Route_Map

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.yaf-route-map.php

---

# A classe Yaf\_Route\_Map

(Yaf >=1.0.0)

## Introdução

**Yaf\_Route\_Map** é uma rota incluída no Yaf. Ela simplesmente
converte um ponto terminal de URI (aquela parte do URI que vem depois da
base: veja [Yaf\_Request\_Abstract::setBaseUri()](yaf-request-abstract.setbaseuri.md))
em um nome de controlador nome ou nome de ação (depende do parâmetro passado para
[Yaf\_Route\_Map::\_\_construct()](yaf-route-map.construct.md)), com a seguinte regra:
A => controlador A.
A/B/C => controlador A\_B\_C.
A/B/C/D/E => controlador A\_B\_C\_D\_E.

Se o segundo parâmetro de
[Yaf\_Route\_Map::\_\_construct()](yaf-route-map.construct.md) for especificado,
apenas a parte antes do delimitador do URI será usada no encaminhamento, a parte posterior
será usada como parâmetros da requisição do encaminhamento (consulte a seção de exemplos de
[Yaf\_Route\_Map::\_\_construct()](yaf-route-map.construct.md)).

## Resumo da classe

class **Yaf\_Route\_Map**
implements
[Yaf\_Route\_Interface](class.yaf-route-interface.md) {

/\* Propriedades \*/

protected
[$\_ctl\_router](class.yaf-route-map.md#yaf-route-map.props.ctl-router);

protected
[$\_delimiter](class.yaf-route-map.md#yaf-route-map.props.delimiter);

/\* Métodos \*/

public function [\_\_construct](yaf-route-map.construct.md)([string](language.types.string.md) `$controller_prefer` = **`false`**, [string](language.types.string.md) `$delimiter` = "")

public function [assemble](yaf-route-map.assemble.md)([array](language.types.array.md) `$info`, [array](language.types.array.md) `$query` = ?): [string](language.types.string.md)

public function [route](yaf-route-map.route.md)([Yaf\_Request\_Abstract](class.yaf-request-abstract.md) `$request`): [bool](language.types.boolean.md)

}

## Propriedades

\_ctl\_router

\_delimiter

## Índice

- [Yaf\_Route\_Map::assemble](yaf-route-map.assemble.md) — Monta um URL
- [Yaf\_Route\_Map::\_\_construct](yaf-route-map.construct.md) — \_\_construct
- [Yaf\_Route\_Map::route](yaf-route-map.route.md) — route

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
