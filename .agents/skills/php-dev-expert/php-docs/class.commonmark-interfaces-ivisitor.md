# A interface CommonMark\Interfaces\IVisitor

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.commonmark-interfaces-ivisitor.php

---

# A interface CommonMark\Interfaces\IVisitor

(cmark >= 1.0.0)

## Introdução

## Resumo da classe

final
class **CommonMark\Interfaces\IVisitor**
{

/\* Constantes \*/

const
[int](language.types.integer.md)
Done;

const
[int](language.types.integer.md)
Enter;

const
[int](language.types.integer.md)
Leave;

/\* Métodos \*/

abstract public function [enter](commonmark-interfaces-ivisitor.enter.md)(IVisitable `$visitable`): [int](language.types.integer.md)|IVisitable|[null](language.types.null.md)

abstract public function [leave](commonmark-interfaces-ivisitor.leave.md)(IVisitable `$visitable`): [int](language.types.integer.md)|IVisitable|[null](language.types.null.md)

}

## Índice

- [CommonMark\Interfaces\IVisitor::enter](commonmark-interfaces-ivisitor.enter.md) — Visitação
- [CommonMark\Interfaces\IVisitor::leave](commonmark-interfaces-ivisitor.leave.md) — Visitação

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
