# CommonMark\Node abstrato

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.commonmark-node.php

---

# CommonMark\Node abstrato

(cmark >= 1.0.0)

## Introdução

Representa um nó abstrato, este "abstrato final" não foi projetado para uso direto do programador.

## Resumo da classe

final
abstract
class **CommonMark\Node**
implements
[CommonMark\Interfaces\IVisitable](class.commonmark-interfaces-ivisitable.md), [Traversable](class.traversable.md) {

/\* Propriedades \*/

public
readonly
?Node
$parent;

public
readonly
?Node
$previous;

public
readonly
?Node
$next;

public
readonly
?Node
$lastChild;

public
readonly
?Node
$firstChild;

public
readonly
[int](language.types.integer.md)
$startLine;

public
readonly
[int](language.types.integer.md)
$endLine;

public
readonly
[int](language.types.integer.md)
$startColumn;

public
readonly
[int](language.types.integer.md)
$endColumn;

/\* Métodos \*/

public function [appendChild](commonmark-node.appendchild.md)([CommonMark\Node](class.commonmark-node.md) `$child`): [CommonMark\Node](class.commonmark-node.md)

public function [prependChild](commonmark-node.prependchild.md)([CommonMark\Node](class.commonmark-node.md) `$child`): [CommonMark\Node](class.commonmark-node.md)

public function [insertAfter](commonmark-node.insertafter.md)([CommonMark\Node](class.commonmark-node.md) `$sibling`): [CommonMark\Node](class.commonmark-node.md)

public function [insertBefore](commonmark-node.insertbefore.md)([CommonMark\Node](class.commonmark-node.md) `$sibling`): [CommonMark\Node](class.commonmark-node.md)

public function [replace](commonmark-node.replace.md)([CommonMark\Node](class.commonmark-node.md) `$target`): [CommonMark\Node](class.commonmark-node.md)

public function [unlink](commonmark-node.unlink.md)(): [void](language.types.void.md)

public function [accept](commonmark-node.accept.md)([CommonMark\Interfaces\IVisitor](class.commonmark-interfaces-ivisitor.md) `$visitor`): [void](language.types.void.md)

}

## Índice

- [CommonMark\Node::appendChild](commonmark-node.appendchild.md) — Manipulação AST
- [CommonMark\Node::prependChild](commonmark-node.prependchild.md) — Manipulação AST
- [CommonMark\Node::insertAfter](commonmark-node.insertafter.md) — Manipulação AST
- [CommonMark\Node::insertBefore](commonmark-node.insertbefore.md) — Manipulação AST
- [CommonMark\Node::replace](commonmark-node.replace.md) — Manipulação AST
- [CommonMark\Node::unlink](commonmark-node.unlink.md) — Manipulação AST
- [CommonMark\Node::accept](commonmark-node.accept.md) — Visitação

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
