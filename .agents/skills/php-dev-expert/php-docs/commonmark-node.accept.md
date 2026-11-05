# Visitação

> **Fonte / Source:** https://www.php.net/manual/pt_BR/commonmark-node.accept.php

---

# CommonMark\Node::accept

(cmark >= 1.0.0)

CommonMark\Node::accept — Visitação

### Descrição

public function **CommonMark\Node::accept**([CommonMark\Interfaces\IVisitor](class.commonmark-interfaces-ivisitor.md) `$visitor`): [void](language.types.void.md)

### Parâmetros

`visitor`
:   Um objeto que implementa a interface [CommonMark\Interfaces\IVisitor](class.commonmark-interfaces-ivisitor.md)

### Veja também

- [CommonMark\Interfaces\IVisitor::enter](commonmark-interfaces-ivisitor.enter.md)
- [CommonMark\Interfaces\IVisitor::leave](commonmark-interfaces-ivisitor.leave.md)

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
