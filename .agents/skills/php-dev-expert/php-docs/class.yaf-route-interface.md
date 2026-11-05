# A classe Yaf_Route_Interface

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.yaf-route-interface.php

---

# A classe Yaf\_Route\_Interface

(Yaf >=1.0.0)

## Introdução

**Yaf\_Route\_Interface** é usada para definição de rotas
customizadas pelo usuário.

## Resumo da classe

class **Yaf\_Route\_Interface**
{

/\* Métodos \*/

abstract public function [assemble](yaf-route-interface.assemble.md)([array](language.types.array.md) `$info`, [array](language.types.array.md) `$query` = ?): [string](language.types.string.md)

abstract public function [route](yaf-route-interface.route.md)([Yaf\_Request\_Abstract](class.yaf-request-abstract.md) `$request`): [bool](language.types.boolean.md)

}

## Índice

- [Yaf\_Route\_Interface::assemble](yaf-route-interface.assemble.md) — Monta uma solicitação
- [Yaf\_Route\_Interface::route](yaf-route-interface.route.md) — Encaminha uma solicitação

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
