# A interface DOMParentNode

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.domparentnode.php

---

# A interface DOMParentNode

(PHP 8)

## Resumo da Interface

interface ****DOMParentNode**** {

/\* Métodos \*/

public function [append](domparentnode.append.md)([DOMNode](class.domnode.md)|[string](language.types.string.md) `...$nodes`): [void](language.types.void.md)

public function [prepend](domparentnode.prepend.md)([DOMNode](class.domnode.md)|[string](language.types.string.md) `...$nodes`): [void](language.types.void.md)

public function [replaceChildren](domparentnode.replacechildren.md)([DOMNode](class.domnode.md)|[string](language.types.string.md) `...$nodes`): [void](language.types.void.md)

}

## Índice

- [DOMParentNode::append](domparentnode.append.md) — Acrescenta nós após o último nó filho
- [DOMParentNode::prepend](domparentnode.prepend.md) — Insere nós antes do primeiro nó filho
- [DOMParentNode::replaceChildren](domparentnode.replacechildren.md) — Substitui filhos no nó

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
