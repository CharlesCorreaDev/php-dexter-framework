# A classe Yaf_Route_Static

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.yaf-route-static.php

---

# A classe Yaf\_Route\_Static

(Yaf >=1.0.0)

## Introdução

Por padrão, [Yaf\_Router](class.yaf-router.md) tem apenas uma
**Yaf\_Route\_Static** como sua rota padrão.

**Yaf\_Route\_Static** é projetada para suportar o
requisito de 80%.

Observe que é desnecessário instanciar uma **Yaf\_Route\_Static**
ou adicioná-la à pilha de rotas do [Yaf\_Router](class.yaf-router.md),
pois sempre haverá uma na pilha do[Yaf\_Router](class.yaf-router.md)
e ela sempre será chamada por último.

## Resumo da classe

class **Yaf\_Route\_Static**
implements
[Yaf\_Router](class.yaf-router.md) {

/\* Métodos \*/

public function [assemble](yaf-route-static.assemble.md)([array](language.types.array.md) `$info`, [array](language.types.array.md) `$query` = ?): [string](language.types.string.md)

public function [match](yaf-route-static.match.md)([string](language.types.string.md) `$uri`): [void](language.types.void.md)

public function [route](yaf-route-static.route.md)([Yaf\_Request\_Abstract](class.yaf-request-abstract.md) `$request`): [bool](language.types.boolean.md)

}

## Índice

- [Yaf\_Route\_Static::assemble](yaf-route-static.assemble.md) — Monta um URL
- [Yaf\_Route\_Static::match](yaf-route-static.match.md) — match
- [Yaf\_Route\_Static::route](yaf-route-static.route.md) — Encaminha uma requisição

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
