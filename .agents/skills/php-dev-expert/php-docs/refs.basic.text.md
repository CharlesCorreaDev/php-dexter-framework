# Processamento de Texto

> **Fonte / Source:** https://www.php.net/manual/pt_BR/refs.basic.text.php

---

# Processamento de Texto

- [CommonMark](book.cmark.md)
  - [Instalação/Configuração](cmark.setup.md)
  - [Constantes predefinidas](cmark.constants.md)
  - [CommonMark\Node\Document](class.commonmark-node-document.md) — CommonMark\Node concreto Document
  - [CommonMark\Node\Heading](class.commonmark-node-heading.md) — CommonMark\Node concreto Heading
  - [CommonMark\Node\Paragraph](class.commonmark-node-paragraph.md) — CommonMark\Node concreto Paragraph
  - [CommonMark\Node\BlockQuote](class.commonmark-node-blockquote.md) — CommonMark\Node concreto BlockQuote
  - [CommonMark\Node\BulletList](class.commonmark-node-bulletlist.md) — CommonMark\Node concreto BulletList
  - [CommonMark\Node\OrderedList](class.commonmark-node-orderedlist.md) — CommonMark\Node concreto OrderedList
  - [CommonMark\Node\Item](class.commonmark-node-item.md) — CommonMark\Node concreto Item
  - [CommonMark\Node\Text](class.commonmark-node-text.md) — CommonMark\Node concreto Text
  - [CommonMark\Node\Text\Strong](class.commonmark-node-text-strong.md) — CommonMark\Node concreto Strong
  - [CommonMark\Node\Text\Emphasis](class.commonmark-node-text-emphasis.md) — CommonMark\Node concreto Emphasis
  - [CommonMark\Node\ThematicBreak](class.commonmark-node-thematicbreak.md) — CommonMark\Node concreto ThematicBreak
  - [CommonMark\Node\SoftBreak](class.commonmark-node-softbreak.md) — CommonMark\Node concreto SoftBreak
  - [CommonMark\Node\LineBreak](class.commonmark-node-linebreak.md) — CommonMark\Node concreto LineBreak
  - [CommonMark\Node\Code](class.commonmark-node-code.md) — CommonMark\Node concreto Code
  - [CommonMark\Node\CodeBlock](class.commonmark-node-codeblock.md) — CommonMark\Node concreto CodeBlock
  - [CommonMark\Node\HTMLBlock](class.commonmark-node-htmlblock.md) — CommonMark\Node concreto HTMLBlock
  - [CommonMark\Node\HTMLInline](class.commonmark-node-htmlinline.md) — CommonMark\Node concreto HTMLInline
  - [CommonMark\Node\Image](class.commonmark-node-image.md) — CommonMark\Node concreto Image
  - [CommonMark\Node\Link](class.commonmark-node-link.md) — CommonMark\Node concreto Link
  - [CommonMark\Node\CustomBlock](class.commonmark-node-customblock.md) — CommonMark\Node concreto CustomBlock
  - [CommonMark\Node\CustomInline](class.commonmark-node-custominline.md) — CommonMark\Node concreto CustomInline
  - [CommonMark\Node](class.commonmark-node.md) — CommonMark\Node abstrato
  - [CommonMark\Interfaces\IVisitor](class.commonmark-interfaces-ivisitor.md) — A interface CommonMark\Interfaces\IVisitor
  - [CommonMark\Interfaces\IVisitable](class.commonmark-interfaces-ivisitable.md) — A interface CommonMark\Interfaces\IVisitable
  - [CommonMark\Parser](class.commonmark-parser.md) — A classe CommonMark\Parser
  - [CommonMark\CQL](class.commonmark-cql.md) — A classe CommonMark\CQL
  - [Funções de CommonMark](ref.cmark.md)
- [Parle](book.parle.md) — Análise sintática e léxixa
  - [Instalação/Configuração](parle.setup.md)
  - [Constantes predefinidas](parle.constants.md)
  - [Correspondência de padrões](parle.pattern.matching.md) — Correspondência de padrões do Parle
  - [Examples](parle.examples.md)
  - [Parle\Lexer](class.parle-lexer.md) — A classe Parle\Lexer
  - [Parle\RLexer](class.parle-rlexer.md) — A classe Parle\RLexer
  - [Parle\Parser](class.parle-parser.md) — A classe Parle\Parser
  - [Parle\RParser](class.parle-rparser.md) — A classe Parle\RParser
  - [Parle\Stack](class.parle-stack.md) — A classe Parle\Stack
  - [Parle\Token](class.parle-token.md) — A classe Parle\Token
  - [Parle\ErrorInfo](class.parle-errorinfo.md) — A classe Parle\ErrorInfo
  - [Parle\LexerException](class.parle-lexerexception.md) — A classe Parle\LexerException
  - [Parle\ParserException](class.parle-parserexception.md) — A classe Parle\ParserException
- [PCRE](book.pcre.md) — Expressões Regulares (Compatíveis com Perl)
  - [Instalação/Configuração](pcre.setup.md)
  - [Constantes predefinidas](pcre.constants.md)
  - [Examples](pcre.examples.md)
  - [Expressões PCRE](pcre.pattern.md)
  - [Funções da PCRE](ref.pcre.md)
- [ssdeep](book.ssdeep.md) — Hashing difuso ssdeep
  - [Instalação/Configuração](ssdeep.setup.md)
  - [ssdeep Funções](ref.ssdeep.md)
- [Strings](book.strings.md)
  - [Instalação/Configuração](strings.setup.md)
  - [Constantes predefinidas](string.constants.md)
  - [Funções de String](ref.strings.md)
  - [Registro de Alterações](changelog.strings.md)

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
