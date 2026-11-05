# A classe Yaf_Route_Supervar

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.yaf-route-supervar.php

---

# A classe Yaf\_Route\_Supervar

(Yaf >=1.0.0)

## Introdução

## Resumo da classe

class **Yaf\_Route\_Supervar**
implements
[Yaf\_Route\_Interface](class.yaf-route-interface.md) {

/\* Propriedades \*/

protected
[$\_var\_name](class.yaf-route-supervar.md#yaf-route-supervar.props.var-name);

/\* Métodos \*/

public function [\_\_construct](yaf-route-supervar.construct.md)([string](language.types.string.md) `$supervar_name`)

public function [assemble](yaf-route-supervar.assemble.md)([array](language.types.array.md) `$info`, [array](language.types.array.md) `$query` = ?): [string](language.types.string.md)

public function [route](yaf-route-supervar.route.md)([Yaf\_Request\_Abstract](class.yaf-request-abstract.md) `$request`): [bool](language.types.boolean.md)

}

## Propriedades

\_var\_name

## Índice

- [Yaf\_Route\_Supervar::assemble](yaf-route-supervar.assemble.md) — Monta um URL
- [Yaf\_Route\_Supervar::\_\_construct](yaf-route-supervar.construct.md) — Construtor de Yaf\_Route\_Supervar
- [Yaf\_Route\_Supervar::route](yaf-route-supervar.route.md) — Encaminha uma requisição

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
