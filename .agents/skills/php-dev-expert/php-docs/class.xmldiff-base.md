# A classe XMLDiff\Base

> **Fonte / Source:** https://www.php.net/manual/pt_BR/class.xmldiff-base.php

---

# A classe XMLDiff\Base

(PECL xmldiff >= 0.8.0)

## Introdução

Classe abstrata base para todas as classes de comparação na extensão.

## Resumo da classe

class **XMLDiff\Base**
{

/\* Métodos \*/

public function [\_\_construct](xmldiff-base.construct.md)([string](language.types.string.md) `$nsname`)

abstract public function [diff](xmldiff-base.diff.md)([mixed](language.types.mixed.md) `$from`, [mixed](language.types.mixed.md) `$to`): [mixed](language.types.mixed.md)

abstract public function [merge](xmldiff-base.merge.md)([mixed](language.types.mixed.md) `$src`, [mixed](language.types.mixed.md) `$diff`): [mixed](language.types.mixed.md)

}

## Índice

- [XMLDiff\Base::\_\_construct](xmldiff-base.construct.md) — Construtor
- [XMLDiff\Base::diff](xmldiff-base.diff.md) — Produz diferença entre dois documentos XML
- [XMLDiff\Base::merge](xmldiff-base.merge.md) — Produz novo documento XML com base em diferenças

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
