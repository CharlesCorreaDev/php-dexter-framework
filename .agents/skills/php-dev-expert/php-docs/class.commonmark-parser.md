# A classe CommonMark\Parser

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.commonmark-parser.php

---

# A classe CommonMark\Parser

(cmark >= 1.0.0)

## Introdução

Fornece um analisador incremental como alternativa à função simples da API de análise.

## Resumo da classe

final
class **CommonMark\Parser**
{

/\* Construtor \*/

public function [\_\_construct](commonmark-parser.construct.md)([int](language.types.integer.md) `$options` = ?)

/\* Métodos \*/

public function [parse](commonmark-parser.parse.md)([string](language.types.string.md) `$buffer`): [void](language.types.void.md)

public function [finish](commonmark-parser.finish.md)(): [CommonMark\Node](class.commonmark-node.md)

}

## Índice

- [CommonMark\Parser::\_\_construct](commonmark-parser.construct.md) — Análise
- [CommonMark\Parser::parse](commonmark-parser.parse.md) — Análise
- [CommonMark\Parser::finish](commonmark-parser.finish.md) — Análise

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
