# A classe Yaf_Route_Simple

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.yaf-route-simple.php

---

# A classe Yaf\_Route\_Simple

(Yaf >=1.0.0)

## Introdução

**Yaf\_Route\_Simple** procurará a correspondência à string da consulta e
encontrará a informação de rota.

Tudo que é necessário fazer é informar ao **Yaf\_Route\_Simple** qual chave de $\_GET é
o módulo, qual chave é o controlador e qual chave é a ação.

[Yaf\_Route\_Simple::route()](yaf-route-simple.route.md) sempre retorna
**`true`**,
por isso é importante incluir **Yaf\_Route\_Simple** na frente da pilha de rotas,
caso contrário todas as outras rotas não serão chamadas.

## Resumo da classe

class **Yaf\_Route\_Simple**
implements
[Yaf\_Route\_Interface](class.yaf-route-interface.md) {

/\* Propriedades \*/

protected
[$controller](class.yaf-route-simple.md#yaf-route-simple.props.controller);

protected
[$module](class.yaf-route-simple.md#yaf-route-simple.props.module);

protected
[$action](class.yaf-route-simple.md#yaf-route-simple.props.action);

/\* Métodos \*/

public function [\_\_construct](yaf-route-simple.construct.md)([string](language.types.string.md) `$module_name`, [string](language.types.string.md) `$controller_name`, [string](language.types.string.md) `$action_name`)

public function [assemble](yaf-route-simple.assemble.md)([array](language.types.array.md) `$info`, [array](language.types.array.md) `$query` = ?): [string](language.types.string.md)

public function [route](yaf-route-simple.route.md)([Yaf\_Request\_Abstract](class.yaf-request-abstract.md) `$request`): [bool](language.types.boolean.md)

}

## Propriedades

controller

module

action

## Índice

- [Yaf\_Route\_Simple::assemble](yaf-route-simple.assemble.md) — Monta um URL
- [Yaf\_Route\_Simple::\_\_construct](yaf-route-simple.construct.md) — Construtor de Yaf\_Route\_Simple
- [Yaf\_Route\_Simple::route](yaf-route-simple.route.md) — Encaminha uma requisição

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
