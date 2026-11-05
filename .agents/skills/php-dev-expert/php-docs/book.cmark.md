# CommonMark

> **Fonte / Source:** https://www.php.net/manual/pt_BR/book.cmark.php

---

# CommonMark

# Introdução

Esta extensão fornece acesso à implementação de referência do CommonMark, uma versão racionalizada da sintaxe Markdown com uma especificação.

##### Análise:

A extensão CommonMark fornece uma API de análise simples:

function [CommonMark\Parse](function.commonmark-parse.md)([string](language.types.string.md) `$content`, [int](language.types.integer.md) `$options` = ?): [CommonMark\Node](class.commonmark-node.md)

##### Renderização:

A extensão CommonMark fornece API de renderização simples que suporta vários formatos:

function [CommonMark\Render](function.commonmark-render.md)([CommonMark\Node](class.commonmark-node.md) `$node`, [int](language.types.integer.md) `$options` = ?, [int](language.types.integer.md) `$width` = ?): [string](language.types.string.md)

function [CommonMark\Render\HTML](function.commonmark-render-html.md)([CommonMark\Node](class.commonmark-node.md) `$node`, [int](language.types.integer.md) `$options` = ?): [string](language.types.string.md)

function [CommonMark\Render\XML](function.commonmark-render-xml.md)([CommonMark\Node](class.commonmark-node.md) `$node`, [int](language.types.integer.md) `$options` = ?): [string](language.types.string.md)

function [CommonMark\Render\Man](function.commonmark-render-man.md)([CommonMark\Node](class.commonmark-node.md) `$node`, [int](language.types.integer.md) `$options` = ?, [int](language.types.integer.md) `$width` = ?): [string](language.types.string.md)

function [CommonMark\Render\Latex](function.commonmark-render-latex.md)([CommonMark\Node](class.commonmark-node.md) `$node`, [int](language.types.integer.md) `$options` = ?, [int](language.types.integer.md) `$width` = ?): [string](language.types.string.md)

##### AST:

A extensão CommonMark implementa visitação para objetos CommonMark\Node:

public function [CommonMark\Node::accept](commonmark-node.accept.md)([CommonMark\Interfaces\IVisitor](class.commonmark-interfaces-ivisitor.md) `$visitor`): [void](language.types.void.md)

##### CQL:

A extensão CommonMark fornece uma interface para CQL, CommonMark Query Language:

public function [CommonMark\CQL::\_\_construct](commonmark-cql.construct.md)([string](language.types.string.md) `$query`)

- [Instalação/Configuração](cmark.setup.md)
  - [Dependências](cmark.requirements.md)
  - [Instalação](cmark.installation.md)
- [Constantes predefinidas](cmark.constants.md)
- [CommonMark\Node\Document](class.commonmark-node-document.md) — CommonMark\Node concreto Document
- [CommonMark\Node\Heading](class.commonmark-node-heading.md) — CommonMark\Node concreto Heading
  - [CommonMark\Node\Heading::\_\_construct](commonmark-node-heading.construct.md) — Construção de Heading
- [CommonMark\Node\Paragraph](class.commonmark-node-paragraph.md) — CommonMark\Node concreto Paragraph
- [CommonMark\Node\BlockQuote](class.commonmark-node-blockquote.md) — CommonMark\Node concreto BlockQuote
- [CommonMark\Node\BulletList](class.commonmark-node-bulletlist.md) — CommonMark\Node concreto BulletList
  - [CommonMark\Node\BulletList::\_\_construct](commonmark-node-bulletlist.construct.md) — Construção de BulletList
- [CommonMark\Node\OrderedList](class.commonmark-node-orderedlist.md) — CommonMark\Node concreto OrderedList
  - [CommonMark\Node\OrderedList::\_\_construct](commonmark-node-orderedlist.construct.md) — Construção de OrderedList
- [CommonMark\Node\Item](class.commonmark-node-item.md) — CommonMark\Node concreto Item
- [CommonMark\Node\Text](class.commonmark-node-text.md) — CommonMark\Node concreto Text
  - [CommonMark\Node\Text::\_\_construct](commonmark-node-text.construct.md) — Construção de Text
- [CommonMark\Node\Text\Strong](class.commonmark-node-text-strong.md) — CommonMark\Node concreto Strong
- [CommonMark\Node\Text\Emphasis](class.commonmark-node-text-emphasis.md) — CommonMark\Node concreto Emphasis
- [CommonMark\Node\ThematicBreak](class.commonmark-node-thematicbreak.md) — CommonMark\Node concreto ThematicBreak
- [CommonMark\Node\SoftBreak](class.commonmark-node-softbreak.md) — CommonMark\Node concreto SoftBreak
- [CommonMark\Node\LineBreak](class.commonmark-node-linebreak.md) — CommonMark\Node concreto LineBreak
- [CommonMark\Node\Code](class.commonmark-node-code.md) — CommonMark\Node concreto Code
- [CommonMark\Node\CodeBlock](class.commonmark-node-codeblock.md) — CommonMark\Node concreto CodeBlock
  - [CommonMark\Node\CodeBlock::\_\_construct](commonmark-node-codeblock.construct.md) — Construção de CodeBlock
- [CommonMark\Node\HTMLBlock](class.commonmark-node-htmlblock.md) — CommonMark\Node concreto HTMLBlock
- [CommonMark\Node\HTMLInline](class.commonmark-node-htmlinline.md) — CommonMark\Node concreto HTMLInline
- [CommonMark\Node\Image](class.commonmark-node-image.md) — CommonMark\Node concreto Image
  - [CommonMark\Node\Image::\_\_construct](commonmark-node-image.construct.md) — Construção de Image
- [CommonMark\Node\Link](class.commonmark-node-link.md) — CommonMark\Node concreto Link
  - [CommonMark\Node\Link::\_\_construct](commonmark-node-link.construct.md) — Construção de Link
- [CommonMark\Node\CustomBlock](class.commonmark-node-customblock.md) — CommonMark\Node concreto CustomBlock
- [CommonMark\Node\CustomInline](class.commonmark-node-custominline.md) — CommonMark\Node concreto CustomInline
- [CommonMark\Node](class.commonmark-node.md) — CommonMark\Node abstrato
  - [CommonMark\Node::appendChild](commonmark-node.appendchild.md) — Manipulação AST
  - [CommonMark\Node::prependChild](commonmark-node.prependchild.md) — Manipulação AST
  - [CommonMark\Node::insertAfter](commonmark-node.insertafter.md) — Manipulação AST
  - [CommonMark\Node::insertBefore](commonmark-node.insertbefore.md) — Manipulação AST
  - [CommonMark\Node::replace](commonmark-node.replace.md) — Manipulação AST
  - [CommonMark\Node::unlink](commonmark-node.unlink.md) — Manipulação AST
  - [CommonMark\Node::accept](commonmark-node.accept.md) — Visitação
- [CommonMark\Interfaces\IVisitor](class.commonmark-interfaces-ivisitor.md) — A interface CommonMark\Interfaces\IVisitor
  - [CommonMark\Interfaces\IVisitor::enter](commonmark-interfaces-ivisitor.enter.md) — Visitação
  - [CommonMark\Interfaces\IVisitor::leave](commonmark-interfaces-ivisitor.leave.md) — Visitação
- [CommonMark\Interfaces\IVisitable](class.commonmark-interfaces-ivisitable.md) — A interface CommonMark\Interfaces\IVisitable
  - [CommonMark\Interfaces\IVisitable::accept](commonmark-interfaces-ivisitable.accept.md) — Visitação
- [CommonMark\Parser](class.commonmark-parser.md) — A classe CommonMark\Parser
  - [CommonMark\Parser::\_\_construct](commonmark-parser.construct.md) — Análise
  - [CommonMark\Parser::parse](commonmark-parser.parse.md) — Análise
  - [CommonMark\Parser::finish](commonmark-parser.finish.md) — Análise
- [CommonMark\CQL](class.commonmark-cql.md) — A classe CommonMark\CQL
  - [CommonMark\CQL::\_\_construct](commonmark-cql.construct.md) — Construção CQL
  - [CommonMark\CQL::\_\_invoke](commonmark-cql.invoke.md) — Execução CQL
- [Funções de CommonMark](ref.cmark.md)
  - [CommonMark\Parse](function.commonmark-parse.md) — Análise
  - [CommonMark\Render](function.commonmark-render.md) — Renderização
  - [CommonMark\Render\HTML](function.commonmark-render-html.md) — Renderização
  - [CommonMark\Render\Latex](function.commonmark-render-latex.md) — Renderização
  - [CommonMark\Render\Man](function.commonmark-render-man.md) — Renderização
  - [CommonMark\Render\XML](function.commonmark-render-xml.md) — Renderização

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
