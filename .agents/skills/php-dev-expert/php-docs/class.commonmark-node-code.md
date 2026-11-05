# CommonMark\Node concreto Code

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.commonmark-node-code.php

---

# CommonMark\Node concreto Code

(cmark >= 1.0.0)

## Resumo da classe

final
class **CommonMark\Node\Code**

extends
[CommonMark\Node\Text](class.commonmark-node-text.md)
implements
[CommonMark\Interfaces\IVisitable](class.commonmark-interfaces-ivisitable.md), [Traversable](class.traversable.md) {

/\* Propriedades herdadas \*/

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

public
?[string](language.types.string.md)
$literal;

/\* Construtor \*/

public function [CommonMark\Node\Text::\_\_construct](commonmark-node-text.construct.md)()

public function [CommonMark\Node\Text::\_\_construct](commonmark-node-text.construct.md)([string](language.types.string.md) `$literal`)

/\* Métodos herdados \*/

public function [CommonMark\Node::appendChild](commonmark-node.appendchild.md)([CommonMark\Node](class.commonmark-node.md) `$child`): [CommonMark\Node](class.commonmark-node.md)

public function [CommonMark\Node::prependChild](commonmark-node.prependchild.md)([CommonMark\Node](class.commonmark-node.md) `$child`): [CommonMark\Node](class.commonmark-node.md)

public function [CommonMark\Node::insertAfter](commonmark-node.insertafter.md)([CommonMark\Node](class.commonmark-node.md) `$sibling`): [CommonMark\Node](class.commonmark-node.md)

public function [CommonMark\Node::insertBefore](commonmark-node.insertbefore.md)([CommonMark\Node](class.commonmark-node.md) `$sibling`): [CommonMark\Node](class.commonmark-node.md)

public function [CommonMark\Node::replace](commonmark-node.replace.md)([CommonMark\Node](class.commonmark-node.md) `$target`): [CommonMark\Node](class.commonmark-node.md)

public function [CommonMark\Node::unlink](commonmark-node.unlink.md)(): [void](language.types.void.md)

public function [CommonMark\Node::accept](commonmark-node.accept.md)([CommonMark\Interfaces\IVisitor](class.commonmark-interfaces-ivisitor.md) `$visitor`): [void](language.types.void.md)

}

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
