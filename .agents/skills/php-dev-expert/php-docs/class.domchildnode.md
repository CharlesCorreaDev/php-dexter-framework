# A interface DOMChildNode

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.domchildnode.php

---

# A interface DOMChildNode

(PHP 8)

## Resumo da Interface

interface ****DOMChildNode**** {

/\* Métodos \*/

public function [after](domchildnode.after.md)([DOMNode](class.domnode.md)|[string](language.types.string.md) `...$nodes`): [void](language.types.void.md)

public function [before](domchildnode.before.md)([DOMNode](class.domnode.md)|[string](language.types.string.md) `...$nodes`): [void](language.types.void.md)

public function [remove](domchildnode.remove.md)(): [void](language.types.void.md)

public function [replaceWith](domchildnode.replacewith.md)([DOMNode](class.domnode.md)|[string](language.types.string.md) `...$nodes`): [void](language.types.void.md)

}

## Índice

- [DOMChildNode::after](domchildnode.after.md) — Adiciona nós após o nó
- [DOMChildNode::before](domchildnode.before.md) — Adiciona nós antes do nó
- [DOMChildNode::remove](domchildnode.remove.md) — Remove o nó
- [DOMChildNode::replaceWith](domchildnode.replacewith.md) — Substitui o nó por novos nós

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
